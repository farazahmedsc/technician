<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Technician extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        // if(!$this->session->userdata('loggedUser')){
        //     redirect('Mams');
        // }

        $this->load->model('M_Technician');
        $this->load->model('M_Form');
        

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

    public function index()
    {
        $this->adminCheck();        
        $data['technician_list'] = $this->M_Technician->get(); 
        $this->load->view('technician-list', $data);
    
    }

    public function create(){
        $this->adminCheck();
        $this->load->view('technician-create');
    }
    public function create_technician()
    {
        $this->adminCheck();
        $this->form_validation->set_rules('t_name','t_name','required');
   
        if ($this->form_validation->run() == TRUE) {

            $data['t_name'] = $this->input->post('t_name');
            $data['t_email'] = $this->input->post('t_email');
            $data['t_phone'] = $this->input->post('t_phone');
            $data['t_username'] = $this->input->post('t_username');
            $data['t_password'] = $this->input->post('t_password');
            $data['t_active'] = $this->input->post('t_active');
            
            if( $data['t_active'] == 'on'){
                $data['t_active'] = 'checked';
            }else{
                $data['t_active'] = '';
            }

            $result = $this->M_Technician->create($data);

            if($result > 0) {

                $this->session->set_flashdata('message_success', 'Entry Created Successfully!');
                redirect("technician/create");
            } 
            else {                
                $this->session->set_flashdata('message_error', 'Failed!');
                redirect("technician/create");
            }            
        } 
        else {
            $this->create();
        }       
    }

    public function update($id)
    {

        $this->adminCheck();
        $data['technician_single'] = $this->M_Technician->getById($id);
        // echo "<pre>";
        // print_r($data['appraiser_single']);
        $this->load->view('technician-edit', $data);
    }
    public function update_technician($id)
    {
        // echo "reached";
        // echo $id;
        $this->adminCheck();
        $this->form_validation->set_rules('t_name','t_name','required');

        if ($this->form_validation->run() == TRUE) {
            $data['t_id'] = $id;
            $data['t_name'] = $this->input->post('t_name');
            $data['t_email'] = $this->input->post('t_email');
            $data['t_phone'] = $this->input->post('t_phone');
            $data['t_username'] = $this->input->post('t_username');
            $data['t_password'] = $this->input->post('t_password');
            $data['t_active'] = $this->input->post('t_active');
            
            if( $data['t_active'] == 'on'){
                $data['t_active'] = 'checked';
            }else{
                $data['t_active'] = '';
            }


            $result = $this->M_Technician->update($data);

            if($result > 0) {
                // $this->index();
                redirect("technician");

            } 
            else {
                
                $this->session->set_flashdata('update_message_error', 'Failed!');
                // $this->index();
                redirect("technician");
            }
            
        } else{
            redirect("technician/update/".$id);

        }
    }


    public function delete()
    {
        $this->adminCheck();
        $data['t_id'] = $this->uri->segment(3);
                
            $result = $this->M_Technician->delete($data);
            if($result > 0) {
                redirect("technician");
            } 
            else {            
                $this->session->set_flashdata('update_message_error', 'Failed to delete!');
                redirect("technician/update/".$data['t_id']);
            }
        

    }
    public function login(){        
        $this->load->view('tech/tech_login');
    }

    public function login_auth(){        

        $data['t_username'] = $this->input->post('t_username');
            $data['t_password'] = $this->input->post('t_password');

            $result = $this->M_Technician->login($data);

			//var_dump($result);

            if(!is_array($result)){
                $this->session->set_flashdata('message_error', $result);
                redirect('technician_login');
            } else {
                //assign returned data from model to session
                $this->session->set_userdata('role', 'technician');
                $this->session->set_userdata('loggedUser', $result);
                $this->dashboard();
            }
            
    }

    public function dashboard(){
        $this->technicianCheck();
        $loggedUser = $this->session->userdata('loggedUser');
		$data['t_name'] = $loggedUser['t_name'];
        $this->load->view('tech/tech_dashboard',$data);
    }

    public function read(){
        
        $this->technicianCheck();
        $loggedUser = $this->session->userdata('loggedUser');
        $data['form_list'] = $this->M_Form->getTechForm( $loggedUser['t_id']);
        // $data['form_list'] = $this->M_Form->get();
        $this->load->view('tech/tech_table',$data);
    }
    
    public function form(){
        $this->technicianCheck();		
			$this->load->view('tech/tech_form');
		
    }
    
    public function test(){
        $role = $this->session->userdata('role');
        $loggedUser = $this->session->userdata('loggedUser');
        echo $role;
        echo "<br>";
        echo "<pre>";
        print_r($loggedUser);

        echo $loggedUser['t_id'];
    }

    public function logout(){
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('loggedUser');
		redirect('technician_login');
	}

}

?>