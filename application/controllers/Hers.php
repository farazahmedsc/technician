<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hers extends CI_Controller {


	public function __construct() {
        parent::__construct();

        $this->load->model('M_Hers');

	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('login');
	}

	public function technicianCheck(){
        $role = $this->session->userdata('role');
        if($role != 'technician'){
            $this->session->set_flashdata('message_error', 'Kindly Login First!');
            redirect('technician_login');
        }        
    }

    public function adminCheck(){
        $role = $this->session->userdata('role');
        if($role != 'admin'){
            $this->session->set_flashdata('message_error', 'Kindly Login First!');
            redirect('login');
        }        
    }
	public function home(){


		// if($this->input->post('username') == "test" && $this->input->post('password') == "123"){

		// 	$loggedUser = "Active";
		// 	$this->session->set_userdata('role', 'admin');
		// 	$this->session->set_userdata('loggedUser', $loggedUser);

		// 	// $loggedUser = $this->session->userdata('loggedUser');
			
		// 	redirect('dashboard');

			

		// }else{
		// 	$this->load->view('login');
		// }




			$data['u_username'] = $this->input->post('username');
            $data['u_password'] = $this->input->post('password');

            $result = $this->M_Hers->login($data);

			//var_dump($result);

            if(!is_array($result)){
				$this->session->set_flashdata('message_error', $result);
				redirect('login');
				//$this->load->view('login');
            } else {
                $loggedUser =  $result;
				$this->session->set_userdata('role', 'admin');
				$this->session->set_userdata('loggedUser', $loggedUser);
				redirect('dashboard');
                
            }
	}
	public function dashboard(){

		$this->adminCheck();
		
		$data['Pu'] = $this->M_Hers->countPu();
		$data['Cs'] = $this->M_Hers->countCs();
		$data['Hp'] = $this->M_Hers->countHp();
		$data['Du'] = $this->M_Hers->countDu();
		
		$loggedUser = $this->session->userdata('loggedUser');
		$data['u_name'] = $loggedUser['u_name'];

		$this->load->view('home', $data);

	}
	public function form(){
		$this->adminCheck();
		
			$this->load->view('form2');
	}

	public function logout(){

		// echo "Reached";
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('loggedUser');

		// $this->index();
		redirect('login');
	}

	public function setting(){

		$data['users'] = $this->M_Hers->get();
		$data['user_single'] = $data['users'][0];
		
		//echo $this->config->item('base_url');

       $this->load->view('setting',$data);

	}

	public function setting_upd($id){

		$data['u_id'] = $id;
		$data['u_name'] = $this->input->post('u_name');
		$data['u_username'] = $this->input->post('u_username');
		$data['u_password'] = $this->input->post('u_password');
		$data['u_email'] = $this->input->post('u_email');

		$result = $this->M_Hers->update($data);


		
            if($result > 0) {    

				$this->session->set_flashdata('message_success', 'Form Submitted Successfully!');
				redirect('setting');          
				
            } 
            else {                
                $this->session->set_flashdata('update_message_error', 'Failed!');                
                redirect('setting');    
            }



	}

	public function submit(){
		$this->adminCheck();
		$this->load->view('table');
		
		// $this->load->view('table');
	}


	public function public_form(){
		$this->load->view('public_form');
	}


	public function email_Test(){


		$this->load->library("Phpmailer_library");

        $mail = $this->phpmailer_library->load();
		try {
			//Recipients
			$mail->setFrom('info@softmaticsolution.com', 'Mailer2');
			$mail->addAddress('farazahmed34296@gmail.com', 'Joe User');     //Add a recipient
			// $mail->addAddress('ellen@example.com');               //Name is optional
			// $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('cc@example.com');
			// $mail->addBCC('bcc@example.com');
		
			//Attachments
			$path = $this->config->item('base_url') . '/asset/images/favicon.png';
			$path2 = 'asset/images/favicon.png';
			$mail->addAttachment($path2, "test.png");         //Add attachments
		
			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Here is the subject2';
			$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
			if(!$mail->send()){
				echo 'Mail could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			}else{
				echo 'Mail has been sent2';
			}
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}


		

		// $to = " farazahmed34296@gmail.com";
		// $headers  = 'MIME-Version: 1.0' . "\r\n";
		// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// $headers .= "From: Hers Test <info@softmaticsolution.com> \r\n";
		// $headers .= "Reply-To: info@softmaticsolution.com\r\n";
		// $headers .= "X-Mailer: PHP/" . phpversion();

        // $subject = 'Test Email';     



	}

}
