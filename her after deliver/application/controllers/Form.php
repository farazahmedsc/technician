<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('M_Form');
		$this->load->model('M_Hers');

    }

    public function index()
	{
		// $this->load->view('welcome_message');
		// $this->load->view('login');
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
	public function sessionCheck(){
        $loggedUser = $this->session->userdata('loggedUser');
        if(!$loggedUser){
            $this->session->set_flashdata('message_error', 'Kindly Login First!');
            redirect('tech_login');
        }        
	}

	
	
	public function create(){

		$linked = $this->input->post('no_of_form');

		
		$data['test_name'] = $this->input->post('test_name');
		$url = $this->input->post('url');
		$data['company_name'] = $this->input->post('company_name');
		$data['site_address'] = $this->input->post('site_address');
		$data['duct_location'] = $this->input->post('duct_location');
		$data['email'] = $this->input->post('email');
		$data['number_of_bedroom'] = $this->input->post('number_of_bedroom');
		$data['unit_type'] = $this->input->post('unit_type');
		
		$data['pu_manufacturer'] = $this->input->post('pu_manufacturer');
		$data['pu_model'] = $this->input->post('pu_model');
		$data['pu_serial'] = $this->input->post('pu_serial');
		$data['pu_btu_input'] = $this->input->post('pu_btu_input');
		$data['pu_btu_output'] = $this->input->post('pu_btu_output');
		$data['pu_efficiency'] = $this->input->post('pu_efficiency');
		$data['pu_tonnage'] = $this->input->post('pu_tonnage');
		$data['pu_seer'] = $this->input->post('pu_seer');
		$data['pu_fulltime'] = $this->input->post('pu_fulltime');

		$data['cs_manufacturer'] = $this->input->post('cs_manufacturer');
		$data['cs_model'] = $this->input->post('cs_model');
		$data['cs_serial'] = $this->input->post('cs_serial');
		$data['cs_tonnage'] = $this->input->post('cs_tonnage');
		$data['cs_seer'] = $this->input->post('cs_seer');

		$data['heat_manufacturer'] = $this->input->post('heat_manufacturer');
		$data['heat_model'] = $this->input->post('heat_model');
		$data['heat_serial'] = $this->input->post('heat_serial');
		$data['heat_tonnage'] = $this->input->post('heat_tonnage');
		$data['heat_seer'] = $this->input->post('heat_seer');

		$data['cg_manufacturer'] = $this->input->post('cg_manufacturer');
		$data['cg_model'] = $this->input->post('cg_model');
		$data['cg_serial'] = $this->input->post('cg_serial');
		$data['cg_btu_input'] = $this->input->post('cg_btu_input');
		$data['cg_btu_output'] = $this->input->post('cg_btu_output');
		$data['cg_efficiency'] = $this->input->post('cg_efficiency');
		$data['cg_fulltime'] = $this->input->post('cg_fulltime');

		$data['acc_manufacturer'] = $this->input->post('acc_manufacturer');
		$data['acc_model'] = $this->input->post('acc_model');
		$data['acc_serial'] = $this->input->post('acc_serial');

		$data['air_manufacturer'] = $this->input->post('air_manufacturer');
		$data['air_model'] = $this->input->post('air_model');
		$data['air_serial'] = $this->input->post('air_serial');
		$data['air_btu_input'] = $this->input->post('air_btu_input');
		$data['air_btu_output'] = $this->input->post('air_btu_output');
		$data['air_efficiency'] = $this->input->post('air_efficiency');
		$data['air_fulltime'] = $this->input->post('air_fulltime');

		$data['con_manufacturer'] = $this->input->post('con_manufacturer');
		$data['con_model'] = $this->input->post('con_model');
		$data['con_serial'] = $this->input->post('con_serial');
		$data['con_btu_input'] = $this->input->post('con_btu_input');
		$data['con_tonnage'] = $this->input->post('con_tonnage');
		$data['con_seer'] = $this->input->post('con_seer');

		$data['in_manufacturer'] = $this->input->post('in_manufacturer');
		$data['in_model'] = $this->input->post('in_model');
		$data['in_serial'] = $this->input->post('in_serial');
		$data['in_btu_input'] = $this->input->post('in_btu_input');
		$data['in_btu_output'] = $this->input->post('in_btu_output');
		$data['in_pounds'] = $this->input->post('in_pounds');
		$data['in_ounces'] = $this->input->post('in_ounces');
		$data['in_fulltime'] = $this->input->post('in_fulltime');

		$data['test_fanWatt'] = $this->input->post('test_fanWatt');
		$data['test_ductLeakage'] = $this->input->post('test_ductLeakage');
		$data['test_duct_leak_result'] = $this->input->post('test_duct_leak_result');
		$data['test_cfm1'] = $this->input->post('test_cfm1');
		$data['test_location1'] = $this->input->post('test_location1');
		$data['test_cfm2'] = $this->input->post('test_cfm2');
		$data['test_location2'] = $this->input->post('test_location2');
		$data['test_cfm3'] = $this->input->post('test_cfm3');
		$data['test_location3'] = $this->input->post('test_location3');
		$data['test_cfm4'] = $this->input->post('test_cfm4');
		$data['test_location4'] = $this->input->post('test_location4');
		$data['test_cfm5'] = $this->input->post('test_cfm5');
		$data['test_location5'] = $this->input->post('test_location5');

		$data['notes'] = $this->input->post('notes');

		$fNameArray = ["pu_image" , "cs_image" , "heat_image" , "cg_image" , "acc_image" , "air_image" , "con_image" , "in_image", "ref_image", "win_image", "water_image", "kitchen_image"];
		
		for($j=0; $j<12; $j++){

		// $fNameArray = ["pu_image" , "cs_image" , "cg_image"];
		$fName = $fNameArray[$j];
		

		   $fn = array ();
            $countfiles = count($_FILES[$fName]['name']);
            
            $path = './uploads/' . $data['test_name'];
            if(!is_dir($path)){
                mkdir($path);
            }
            // Looping all files
            for($i=0;$i<$countfiles;$i++) {
                // Define new $_FILES array - $_FILES['file']
                $_FILES['file']['name'] = $_FILES[$fName]['name'][$i];
                $_FILES['file']['type'] = $_FILES[$fName]['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES[$fName]['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES[$fName]['error'][$i];
                $_FILES['file']['size'] = $_FILES[$fName]['size'][$i];


                $config['upload_path']          = $path ;
                $config['allowed_types']        = '*';
                $config['max_size']             = 10024; // 10mb you can set the value you want
                $config['max_width']            = 6000; // 6000px you can set the value you want
                $config['max_height']           = 6000; // 6000px
                
                $new_name = $_FILES[$fName]['name'][$i];
                $new_name = str_replace(" ","_",$new_name);
                $config['file_name'] = $new_name;

                array_push($fn,$new_name);

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                        $uploadedData = array('upload_data' => $this->upload->data());
                }

                unset($this->upload);

            }

           $data[$fName] =  implode(',',$fn);
		}

		$data['tech_id'] = "1";


		$role = $this->session->userdata('role');

		if($role == 'technician'){
			$loggedUser = $this->session->userdata('loggedUser');

			$data['tech_id'] = $loggedUser['t_id'];

		}

		


		$data2['test_name'] = $this->input->post('second_test_name');
		if($linked >= 2){
			
			$data2['company_name'] = $this->input->post('second_company_name');
			$data2['site_address'] = $this->input->post('second_site_address');
			$data2['duct_location'] = $this->input->post('second_duct_location');
			$data2['email'] = $this->input->post('second_email');
			$data2['number_of_bedroom'] = $this->input->post('second_number_of_bedroom');
			$data2['unit_type'] = $this->input->post('second_unit_type');
			
			$data2['pu_manufacturer'] = $this->input->post('second_pu_manufacturer');
			$data2['pu_model'] = $this->input->post('second_pu_model');
			$data2['pu_serial'] = $this->input->post('second_pu_serial');
			$data2['pu_btu_input'] = $this->input->post('second_pu_btu_input');
			$data2['pu_btu_output'] = $this->input->post('second_pu_btu_output');
			$data2['pu_efficiency'] = $this->input->post('second_pu_efficiency');
			$data2['pu_tonnage'] = $this->input->post('second_pu_tonnage');
			$data2['pu_seer'] = $this->input->post('second_pu_seer');
			$data2['pu_fulltime'] = $this->input->post('second_pu_fulltime');

			$data2['cs_manufacturer'] = $this->input->post('second_cs_manufacturer');
			$data2['cs_model'] = $this->input->post('second_cs_model');
			$data2['cs_serial'] = $this->input->post('second_cs_serial');
			$data2['cs_tonnage'] = $this->input->post('second_cs_tonnage');
			$data2['cs_seer'] = $this->input->post('second_cs_seer');

			$data2['heat_manufacturer'] = $this->input->post('second_heat_manufacturer');
			$data2['heat_model'] = $this->input->post('second_heat_model');
			$data2['heat_serial'] = $this->input->post('second_heat_serial');
			$data2['heat_tonnage'] = $this->input->post('second_heat_tonnage');
			$data2['heat_seer'] = $this->input->post('second_heat_seer');

			$data2['cg_manufacturer'] = $this->input->post('second_cg_manufacturer');
			$data2['cg_model'] = $this->input->post('second_cg_model');
			$data2['cg_serial'] = $this->input->post('second_cg_serial');
			$data2['cg_btu_input'] = $this->input->post('second_cg_btu_input');
			$data2['cg_btu_output'] = $this->input->post('second_cg_btu_output');
			$data2['cg_efficiency'] = $this->input->post('second_cg_efficiency');
			$data2['cg_fulltime'] = $this->input->post('second_cg_fulltime');

			$data2['acc_manufacturer'] = $this->input->post('second_acc_manufacturer');
			$data2['acc_model'] = $this->input->post('second_acc_model');
			$data2['acc_serial'] = $this->input->post('second_acc_serial');

			$data2['air_manufacturer'] = $this->input->post('second_air_manufacturer');
			$data2['air_model'] = $this->input->post('second_air_model');
			$data2['air_serial'] = $this->input->post('second_air_serial');
			$data2['air_btu_input'] = $this->input->post('second_air_btu_input');
			$data2['air_btu_output'] = $this->input->post('second_air_btu_output');
			$data2['air_efficiency'] = $this->input->post('second_air_efficiency');
			$data2['air_fulltime'] = $this->input->post('second_air_fulltime');

			$data2['con_manufacturer'] = $this->input->post('second_con_manufacturer');
			$data2['con_model'] = $this->input->post('second_con_model');
			$data2['con_serial'] = $this->input->post('second_con_serial');
			$data2['con_btu_input'] = $this->input->post('second_con_btu_input');
			$data2['con_tonnage'] = $this->input->post('second_con_tonnage');
			$data2['con_seer'] = $this->input->post('second_con_seer');

			$data2['in_manufacturer'] = $this->input->post('second_in_manufacturer');
			$data2['in_model'] = $this->input->post('second_in_model');
			$data2['in_serial'] = $this->input->post('second_in_serial');
			$data2['in_btu_input'] = $this->input->post('second_in_btu_input');
			$data2['in_btu_output'] = $this->input->post('second_in_btu_output');
			$data2['in_pounds'] = $this->input->post('second_in_pounds');
			$data2['in_ounces'] = $this->input->post('second_in_ounces');
			$data2['in_fulltime'] = $this->input->post('second_in_fulltime');

			$data2['test_fanWatt'] = $this->input->post('second_test_fanWatt');
			$data2['test_ductLeakage'] = $this->input->post('second_test_ductLeakage');
			$data2['test_duct_leak_result'] = $this->input->post('second_test_duct_leak_result');
			$data2['test_cfm1'] = $this->input->post('second_test_cfm1');
			$data2['test_location1'] = $this->input->post('second_test_location1');
			$data2['test_cfm2'] = $this->input->post('second_test_cfm2');
			$data2['test_location2'] = $this->input->post('second_test_location2');
			$data2['test_cfm3'] = $this->input->post('second_test_cfm3');
			$data2['test_location3'] = $this->input->post('second_test_location3');
			$data2['test_cfm4'] = $this->input->post('second_test_cfm4');
			$data2['test_location4'] = $this->input->post('second_test_location4');
			$data2['test_cfm5'] = $this->input->post('second_test_cfm5');
			$data2['test_location5'] = $this->input->post('second_test_location5');

			$data2['notes'] = $this->input->post('second_notes');

			$fnd = ["pu_image" , "cs_image" , "heat_image" , "cg_image" , "acc_image" , "air_image" , "con_image" , "in_image", "ref_image", "win_image", "water_image", "kitchen_image"];
			
			$fNameArray = ["second_pu_image" , "second_cs_image" , "second_heat_image" , "second_cg_image" , "second_acc_image" , "second_air_image" , "second_con_image" , "second_in_image", "second_ref_image", "second_win_image", "second_water_image", "second_kitchen_image"];
			
			for($j=0; $j<12; $j++){

			// $fNameArray = ["pu_image" , "cs_image" , "cg_image"];
			$fName = $fNameArray[$j];
			$fd = $fnd[$j];
			
			

			$fn = array ();
				$countfiles = count($_FILES[$fName]['name']);
				
				$path = './uploads/' . $data2['test_name'];
				if(!is_dir($path)){
					mkdir($path);
				}
				// Looping all files
				for($i=0;$i<$countfiles;$i++) {
					// Define new $_FILES array - $_FILES['file']
					$_FILES['file']['name'] = $_FILES[$fName]['name'][$i];
					$_FILES['file']['type'] = $_FILES[$fName]['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES[$fName]['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES[$fName]['error'][$i];
					$_FILES['file']['size'] = $_FILES[$fName]['size'][$i];


					$config['upload_path']          = $path ;
					$config['allowed_types']        = '*';
					$config['max_size']             = 10024; // 10mb you can set the value you want
					$config['max_width']            = 6000; // 6000px you can set the value you want
					$config['max_height']           = 6000; // 6000px
					
					$new_name = $_FILES[$fName]['name'][$i];
					$new_name = str_replace(" ","_",$new_name);
					$config['file_name'] = $new_name;

					array_push($fn,$new_name);

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('file'))
					{
							$error = array('error' => $this->upload->display_errors());
					}
					else
					{
							$uploadedData = array('upload_data' => $this->upload->data());
					}

					unset($this->upload);

				}

			$data2[$fd] =  implode(',',$fn);
			}

			$data2['tech_id'] = "1";


			$role = $this->session->userdata('role');

			if($role == 'technician'){
				$loggedUser = $this->session->userdata('loggedUser');

				$data2['tech_id'] = $loggedUser['t_id'];

			}
		}




		$data3['test_name'] = $this->input->post('third_test_name');
		if($linked == 3){
			
			$data3['company_name'] = $this->input->post('third_company_name');
			$data3['site_address'] = $this->input->post('third_site_address');
			$data3['duct_location'] = $this->input->post('third_duct_location');
			$data3['email'] = $this->input->post('third_email');
			$data3['number_of_bedroom'] = $this->input->post('third_number_of_bedroom');
			$data3['unit_type'] = $this->input->post('third_unit_type');
			
			$data3['pu_manufacturer'] = $this->input->post('third_pu_manufacturer');
			$data3['pu_model'] = $this->input->post('third_pu_model');
			$data3['pu_serial'] = $this->input->post('third_pu_serial');
			$data3['pu_btu_input'] = $this->input->post('third_pu_btu_input');
			$data3['pu_btu_output'] = $this->input->post('third_pu_btu_output');
			$data3['pu_efficiency'] = $this->input->post('third_pu_efficiency');
			$data3['pu_tonnage'] = $this->input->post('third_pu_tonnage');
			$data3['pu_seer'] = $this->input->post('third_pu_seer');
			$data3['pu_fulltime'] = $this->input->post('third_pu_fulltime');
		
			$data3['cs_manufacturer'] = $this->input->post('third_cs_manufacturer');
			$data3['cs_model'] = $this->input->post('third_cs_model');
			$data3['cs_serial'] = $this->input->post('third_cs_serial');
			$data3['cs_tonnage'] = $this->input->post('third_cs_tonnage');
			$data3['cs_seer'] = $this->input->post('third_cs_seer');
		
			$data3['heat_manufacturer'] = $this->input->post('third_heat_manufacturer');
			$data3['heat_model'] = $this->input->post('third_heat_model');
			$data3['heat_serial'] = $this->input->post('third_heat_serial');
			$data3['heat_tonnage'] = $this->input->post('third_heat_tonnage');
			$data3['heat_seer'] = $this->input->post('third_heat_seer');
		
			$data3['cg_manufacturer'] = $this->input->post('third_cg_manufacturer');
			$data3['cg_model'] = $this->input->post('third_cg_model');
			$data3['cg_serial'] = $this->input->post('third_cg_serial');
			$data3['cg_btu_input'] = $this->input->post('third_cg_btu_input');
			$data3['cg_btu_output'] = $this->input->post('third_cg_btu_output');
			$data3['cg_efficiency'] = $this->input->post('third_cg_efficiency');
			$data3['cg_fulltime'] = $this->input->post('third_cg_fulltime');
		
			$data3['acc_manufacturer'] = $this->input->post('third_acc_manufacturer');
			$data3['acc_model'] = $this->input->post('third_acc_model');
			$data3['acc_serial'] = $this->input->post('third_acc_serial');
		
			$data3['air_manufacturer'] = $this->input->post('third_air_manufacturer');
			$data3['air_model'] = $this->input->post('third_air_model');
			$data3['air_serial'] = $this->input->post('third_air_serial');
			$data3['air_btu_input'] = $this->input->post('third_air_btu_input');
			$data3['air_btu_output'] = $this->input->post('third_air_btu_output');
			$data3['air_efficiency'] = $this->input->post('third_air_efficiency');
			$data3['air_fulltime'] = $this->input->post('third_air_fulltime');
		
			$data3['con_manufacturer'] = $this->input->post('third_con_manufacturer');
			$data3['con_model'] = $this->input->post('third_con_model');
			$data3['con_serial'] = $this->input->post('third_con_serial');
			$data3['con_btu_input'] = $this->input->post('third_con_btu_input');
			$data3['con_tonnage'] = $this->input->post('third_con_tonnage');
			$data3['con_seer'] = $this->input->post('third_con_seer');
		
			$data3['in_manufacturer'] = $this->input->post('third_in_manufacturer');
			$data3['in_model'] = $this->input->post('third_in_model');
			$data3['in_serial'] = $this->input->post('third_in_serial');
			$data3['in_btu_input'] = $this->input->post('third_in_btu_input');
			$data3['in_btu_output'] = $this->input->post('third_in_btu_output');
			$data3['in_pounds'] = $this->input->post('third_in_pounds');
			$data3['in_ounces'] = $this->input->post('third_in_ounces');
			$data3['in_fulltime'] = $this->input->post('third_in_fulltime');
		
			$data3['test_fanWatt'] = $this->input->post('third_test_fanWatt');
			$data3['test_ductLeakage'] = $this->input->post('third_test_ductLeakage');
			$data3['test_duct_leak_result'] = $this->input->post('third_test_duct_leak_result');
			$data3['test_cfm1'] = $this->input->post('third_test_cfm1');
			$data3['test_location1'] = $this->input->post('third_test_location1');
			$data3['test_cfm2'] = $this->input->post('third_test_cfm2');
			$data3['test_location2'] = $this->input->post('third_test_location2');
			$data3['test_cfm3'] = $this->input->post('third_test_cfm3');
			$data3['test_location3'] = $this->input->post('third_test_location3');
			$data3['test_cfm4'] = $this->input->post('third_test_cfm4');
			$data3['test_location4'] = $this->input->post('third_test_location4');
			$data3['test_cfm5'] = $this->input->post('third_test_cfm5');
			$data3['test_location5'] = $this->input->post('third_test_location5');
		
			$data3['notes'] = $this->input->post('third_notes');
		
			$fnd = ["pu_image" , "cs_image" , "heat_image" , "cg_image" , "acc_image" , "air_image" , "con_image" , "in_image", "ref_image", "win_image", "water_image", "kitchen_image"];
			
			$fNameArray = ["third_pu_image" , "third_cs_image" , "third_heat_image" , "third_cg_image" , "third_acc_image" , "third_air_image" , "third_con_image" , "third_in_image", "third_ref_image", "third_win_image", "third_water_image", "third_kitchen_image"];
			
			for($j=0; $j<12; $j++){
		
			// $fNameArray = ["pu_image" , "cs_image" , "cg_image"];
			$fName = $fNameArray[$j];
			$fd = $fnd[$j];
			
			
		
			$fn = array ();
				$countfiles = count($_FILES[$fName]['name']);
				
				$path = './uploads/' . $data3['test_name'];
				if(!is_dir($path)){
					mkdir($path);
				}
				// Looping all files
				for($i=0;$i<$countfiles;$i++) {
					// Define new $_FILES array - $_FILES['file']
					$_FILES['file']['name'] = $_FILES[$fName]['name'][$i];
					$_FILES['file']['type'] = $_FILES[$fName]['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES[$fName]['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES[$fName]['error'][$i];
					$_FILES['file']['size'] = $_FILES[$fName]['size'][$i];
		
		
					$config['upload_path']          = $path ;
					$config['allowed_types']        = '*';
					$config['max_size']             = 10024; // 10mb you can set the value you want
					$config['max_width']            = 6000; // 6000px you can set the value you want
					$config['max_height']           = 6000; // 6000px
					
					$new_name = $_FILES[$fName]['name'][$i];
					$new_name = str_replace(" ","_",$new_name);
					$config['file_name'] = $new_name;
		
					array_push($fn,$new_name);
		
					$this->load->library('upload', $config);
		
					if ( ! $this->upload->do_upload('file'))
					{
							$error = array('error' => $this->upload->display_errors());
					}
					else
					{
							$uploadedData = array('upload_data' => $this->upload->data());
					}
		
					unset($this->upload);
		
				}
		
			$data3[$fd] =  implode(',',$fn);
			}
		
			$data3['tech_id'] = "1";
		
		
			$role = $this->session->userdata('role');
		
			if($role == 'technician'){
				$loggedUser = $this->session->userdata('loggedUser');
		
				$data3['tech_id'] = $loggedUser['t_id'];
		
			}
		}
		

		// echo "------------- <br>";
		// echo "<pre>";
		// print_r($data);

		// echo "------------- <br>";
		// echo "<pre>";
		// print_r($data2);


		// echo "------------- <br>";
		// echo "<pre>";
		// print_r($data3);


		if($linked > 1){
			$data['linked'] = "Yes"; $data2['linked'] = "Yes"; $data3['linked'] = "Yes"; 
			
		}else{
			$data['linked'] = "No"; $data2['linked'] = "No"; $data3['linked'] = "No"; 
		}
		$data['linked_total'] = $linked; $data2['linked_total'] = $linked; $data3['linked_total'] = $linked; 
		$data['linked_order'] = '1'; $data2['linked_order'] = '2'; $data3['linked_order'] ='3'; 

		$result = $this->M_Form->create($data);
		$linkedCount = 1;

		
		if($linked >= 2 ){
			$result2 = $this->M_Form->create($data2);

			if($result2 > 0) {
				$linkedCount++;
			}
			
		}

		if($linked == 3 ){
			$result3 = $this->M_Form->create($data3);
			if($result3 > 0) {
				$linkedCount++;
			}
		}

	
		//$this->load->library('../controllers/Email'); 



		if($linked == 1){$this->email1($data,$linked,'_1');}
		else if($linked == 2){$this->email1($data,$linked,'_1');$this->email1($data2,$linked,'_2');}
		else if($linked == 3){$this->email1($data,$linked,'_1');$this->email1($data2,$linked,'_2');$this->email1($data3,$linked,'_3');}


		

		
			if($result > 0) {
				//$this->emailSend($data,$linked);

				$this->session->set_flashdata('message_success', 'Form Submitted Successfully!');
				redirect($url);
			} 
			else {                
				$this->session->set_flashdata('message_error', 'Failed!');
				redirect($url);
			}   
	        


	}

	public function read(){
		$this->adminCheck();
		$data['form_list'] = $this->M_Form->get();
        $this->load->view('table',$data);
	}

	public function update($id){
		$this->sessionCheck();

		$role = $this->session->userdata('role');
		$data['fs'] = $this->M_Form->getById($id);

		if($role == 'admin'){			
			$this->load->view('form_upd', $data);
		}else if ($role == 'technician'){
			$loggedUser = $this->session->userdata('loggedUser');

			// echo "<pre>";
			// print_r($data['fs']);

			// echo $data['fs']->tech_id;
			if($loggedUser['t_id'] == $data['fs']->tech_id){
				$this->load->view('tech/tech_form_upd', $data);
			}else{
				redirect('tech_form/read');
			}
		}else{
			redirect('technician_login');
		}

        
	}

	public function update_form($id){
		
		$data['f_id'] = $id;

		$data['test_name'] = $this->input->post('test_name');
		$url = "";
		$role = $this->session->userdata('role');

		if($role == "technician"){
			$url = 'tech_form/read';
		}else{
			$url = 'form/read';
		}

		$data['company_name'] = $this->input->post('company_name');
		$data['site_address'] = $this->input->post('site_address');
		$data['duct_location'] = $this->input->post('duct_location');
		$data['email'] = $this->input->post('email');
		$data['number_of_bedroom'] = $this->input->post('number_of_bedroom');
		$data['unit_type'] = $this->input->post('unit_type');
		
		$data['pu_manufacturer'] = $this->input->post('pu_manufacturer');
		$data['pu_model'] = $this->input->post('pu_model');
		$data['pu_serial'] = $this->input->post('pu_serial');
		$data['pu_btu_input'] = $this->input->post('pu_btu_input');
		$data['pu_btu_output'] = $this->input->post('pu_btu_output');
		$data['pu_efficiency'] = $this->input->post('pu_efficiency');
		$data['pu_tonnage'] = $this->input->post('pu_tonnage');
		$data['pu_seer'] = $this->input->post('pu_seer');

		$data['cs_manufacturer'] = $this->input->post('cs_manufacturer');
		$data['cs_model'] = $this->input->post('cs_model');
		$data['cs_serial'] = $this->input->post('cs_serial');
		$data['cs_tonnage'] = $this->input->post('cs_tonnage');
		$data['cs_seer'] = $this->input->post('cs_seer');

		$data['heat_manufacturer'] = $this->input->post('heat_manufacturer');
		$data['heat_model'] = $this->input->post('heat_model');
		$data['heat_serial'] = $this->input->post('heat_serial');
		$data['heat_tonnage'] = $this->input->post('heat_tonnage');
		$data['heat_seer'] = $this->input->post('heat_seer');

		$data['cg_manufacturer'] = $this->input->post('cg_manufacturer');
		$data['cg_model'] = $this->input->post('cg_model');
		$data['cg_serial'] = $this->input->post('cg_serial');
		$data['cg_btu_input'] = $this->input->post('cg_btu_input');
		$data['cg_btu_output'] = $this->input->post('cg_btu_output');
		$data['cg_efficiency'] = $this->input->post('cg_efficiency');
		$data['cg_fulltime'] = $this->input->post('cg_fulltime');

		$data['acc_manufacturer'] = $this->input->post('acc_manufacturer');
		$data['acc_model'] = $this->input->post('acc_model');
		$data['acc_serial'] = $this->input->post('acc_serial');

		$data['air_manufacturer'] = $this->input->post('air_manufacturer');
		$data['air_model'] = $this->input->post('air_model');
		$data['air_serial'] = $this->input->post('air_serial');
		$data['air_btu_input'] = $this->input->post('air_btu_input');
		$data['air_btu_output'] = $this->input->post('air_btu_output');
		$data['air_efficiency'] = $this->input->post('air_efficiency');

		$data['con_manufacturer'] = $this->input->post('con_manufacturer');
		$data['con_model'] = $this->input->post('con_model');
		$data['con_serial'] = $this->input->post('con_serial');
		$data['con_btu_input'] = $this->input->post('con_btu_input');
		$data['con_tonnage'] = $this->input->post('con_tonnage');
		$data['con_seer'] = $this->input->post('con_seer');

		$data['in_manufacturer'] = $this->input->post('in_manufacturer');
		$data['in_model'] = $this->input->post('in_model');
		$data['in_serial'] = $this->input->post('in_serial');
		$data['in_btu_input'] = $this->input->post('in_btu_input');
		$data['in_btu_output'] = $this->input->post('in_btu_output');
		$data['in_pounds'] = $this->input->post('in_pounds');
		$data['in_ounces'] = $this->input->post('in_ounces');

		$data['test_fanWatt'] = $this->input->post('test_fanWatt');
		$data['test_ductLeakage'] = $this->input->post('test_ductLeakage');
		$data['test_duct_leak_result'] = $this->input->post('test_duct_leak_result');
		$data['test_cfm1'] = $this->input->post('test_cfm1');
		$data['test_location1'] = $this->input->post('test_location1');
		$data['test_cfm2'] = $this->input->post('test_cfm2');
		$data['test_location2'] = $this->input->post('test_location2');
		$data['test_cfm3'] = $this->input->post('test_cfm3');
		$data['test_location3'] = $this->input->post('test_location3');
		$data['test_cfm4'] = $this->input->post('test_cfm4');
		$data['test_location4'] = $this->input->post('test_location4');
		$data['test_cfm5'] = $this->input->post('test_cfm5');
		$data['test_location5'] = $this->input->post('test_location5');

		$data['notes'] = $this->input->post('notes');



		$fNameArray = ["pu_image" , "cs_image" , "heat_image" , "cg_image" , "acc_image" , "air_image" , "con_image" , "in_image", "ref_image", "win_image", "water_image", "kitchen_image"];
		$fOldFile = ["pu_upd_old_file" , "cs_upd_old_file" , "heat_upd_old_file" , "cg_upd_old_file" , "acc_upd_old_file" , "air_upd_old_file" , "con_upd_old_file" , "in_upd_old_file", "ref_upd_old_file", "win_upd_old_file", "water_upd_old_file", "kitchen_upd_old_file"];

		for($j=0; $j<12; $j++){

		// $fNameArray = ["pu_image" , "cs_image" , "cg_image"];
		$fName = $fNameArray[$j];


			$old_file = $this->input->post($fOldFile[$j]);
				
			$fn = array ();
			// Count total files 
			$countfiles = count($_FILES[$fName]['name']);
			$path = './uploads/' . $data['test_name'];

			for($i=0;$i<$countfiles;$i++) {

				// Define new $_FILES array - $_FILES['file']
				$_FILES['file']['name'] = $_FILES[$fName]['name'][$i];
				$_FILES['file']['type'] = $_FILES[$fName]['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES[$fName]['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES[$fName]['error'][$i];
				$_FILES['file']['size'] = $_FILES[$fName]['size'][$i];


				$config['upload_path']          = $path ;
				$config['allowed_types']        = '*';
				$config['max_size']             = 10024; // 10mb you can set the value you want
				$config['max_width']            = 6000; // 6000px you can set the value you want
				$config['max_height']           = 6000; // 6000px
				// $new_name = $data['cl_name'].$i;
				
				$new_name = $_FILES[$fName]['name'][$i];
				$config['file_name'] = $new_name;

				array_push($fn,$_FILES[$fName]['name'][$i]);

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('file'))
				{
						$error = array('error' => $this->upload->display_errors());                        
				}
				else
				{
						$uploadedData = array('upload_data' => $this->upload->data());                        
				}
				unset($this->upload);
			}
		
			
				$tmp = implode(',',$fn);
				$result = "";
				if($tmp == ""){
					// if (!$result) {
					// 	$result = "";
					// } else {
						$result = $old_file;
					// }
					
				}else{
					$result = $tmp;
					
				}





				

				

				// echo $fName;
				// echo "<br>";
				// echo "result";
				// echo "<pre>";
				// print_r($result);
				// echo "old_file";
				// echo "<pre>";
				// print_r($old_file);
				// echo "<br>";
				// echo "==========";
			
			// if($old_file != ""){
			//     if($tmp != ""){
			//         $tmp = $old_file . "," . $tmp;
			//     }else{
			//         $tmp = $old_file;
			//     }
			
			// }
			
			$data[$fName] =  $result;

		}











		$result = $this->M_Form->update($data);

            if($result > 0) {                
                redirect($url);
            } 
            else {                
                $this->session->set_flashdata('update_message_error', 'Failed!');                
                redirect($url);
            }

	}

	public function delete($id)
    {
        $this->sessionCheck();
        $data['f_id'] = $id;
        $result = $this->M_Form->delete($data);

        if($result > 0) {
			redirect("form/read");
        } 
        else {            
            $this->session->set_flashdata('delete_message_error', 'Failed!');
			redirect("form/read");
        }

	}
	


    
    public function emailSend($data, $linked){

		$to = "maoraizenkut@gmail.com, farazahmed34296@gmail.com";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: Hers Test <info@softmaticsolution.com> \r\n";
		$headers .= "Reply-To: info@softmaticsolution.com\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion();

        $subject = 'Hers Form Submitted';       

		// $pu_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['pu_image'];
		// $msg .= '  image: <b><img src="'. $pu_image.'" width="300px"></b><br> ';

		$msg = '<html><body>';

		
		$pu = $data['unit_type'];


		$notes = '<h3>Test Result</h3><br>';
		$notes .= ' Duct Leakage CFM Result: <b>'.$data['test_duct_leak_result'].'</b><br> ';
		$notes .= ' Duct Leakage CFM: <b>'.$data['test_ductLeakage'].'</b><br> ';
		$notes .= ' Fan Watt Draw: <b>'.$data['test_fanWatt'].'</b><br> ';
		$notes .= ' CFM (Return 1): <b>'.$data['test_cfm1'].'</b><br> ';
		$notes .= ' Location (Return 1): <b>'.$data['test_location1'].'</b><br> ';
		$notes .= ' CFM (Return 2): <b>'.$data['test_cfm2'].'</b><br> ';
		$notes .= ' Location (Return 2): <b>'.$data['test_location2'].'</b><br> ';
		$notes .= ' CFM (Return 3): <b>'.$data['test_cfm3'].'</b><br> ';
		$notes .= ' Location (Return 3): <b>'.$data['test_location3'].'</b><br> ';
		$notes .= ' CFM (Return 4): <b>'.$data['test_cfm4'].'</b><br> ';
		$notes .= ' Location (Return 4): <b>'.$data['test_location4'].'</b><br> ';
		$notes .= ' CFM (Return 5): <b>'.$data['test_cfm5'].'</b><br> ';
		$notes .= ' Location (Return 5): <b>'.$data['test_location5'].'</b><br> ';
		$notes .= ' Notes: <b>'.$data['notes'].'</b><br> ';
		

		
		$msg .= ' <em>Hers Form is Submitted: </em><br><br>' ;
		$msg .= ' <h3>Hers Test</h3>' ;
		$msg .= '  Test Name: <b>'.$data['test_name'].'</b><br> ';
		$msg .= '  Company Name: <b>'.$data['company_name'].'</b><br> ';
		$msg .= '  Site Address: <b>'.$data['site_address'].'</b><br> ';
		$msg .= '  Duct Location: <b>'.$data['duct_location'].'</b><br> ';
		$msg .= '  Email: <b>'.$data['email'].'</b><br> ';
		$msg .= '  # of Bedroom: <b>'.$data['number_of_bedroom'].'</b><br> ';
		$msg .= '  Unit Type: <b>'.$pu.'</b><br> ';



		if($pu == "Package_Unit"){


			$pu_image = "";
			$win_image = ""; $water_image = ""; $kitchen_image = "";
			if($data['pu_image'] != ""){$pu_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['pu_image'];}
			if($data['win_image'] != ""){$win_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['win_image'];}
			if($data['water_image'] != ""){$water_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['water_image'];}
			if($data['kitchen_image'] != ""){$kitchen_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['kitchen_image'];}

			$msg .= '<br><br> <h3>Package Unit</h3>' ;
			$msg .= '  Manufacturer: <b>'.$data['pu_manufacturer'].'</b><br> ';
			$msg .= '  Model Number: <b>'.$data['pu_model'].'</b><br> ';
			$msg .= '  Serial Number: <b>'.$data['pu_serial'].'</b><br> ';
			$msg .= '  BTU Input: <b>'.$data['pu_btu_input'].'</b><br> ';
			$msg .= '  BTU Output: <b>'.$data['pu_btu_output'].'</b><br> ';
			$msg .= '  Efficiency: <b>'.$data['pu_efficiency'].'</b><br> ';
			$msg .= '  Tonnage: <b>'.$data['pu_tonnage'].'</b><br> ';
			$msg .= '  Seers: <b>'.$data['pu_seer'].'</b><br> ';
			$msg .= '  Full Title 24?: <b>'.$data['pu_fulltime'].'</b><br> ';

			$msg .= $notes;


			$msg .= ' <br> Package Unit Image: <br><b><img src="'. $pu_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Windows Image: <br><b><img src="'. $win_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Water Image: <br><b><img src="'. $water_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Kitchen Hood Image: <br><b><img src="'. $kitchen_image.'" width="300px"></b><br> ';

			
			$msg .= ' </body></html> ';


		}else if ($pu == "Central_Split_AC"){


			$cs_image = ""; $cg_image = ""; $acc_image = ""; $ref_image = "";  $win_image = ""; $water_image = ""; $kitchen_image = "";
			if($data['cs_image'] != ""){$cs_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['cs_image'];}
			if($data['cg_image'] != ""){$cg_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['cg_image'];}
			if($data['acc_image'] != ""){$acc_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['acc_image'];}
			if($data['ref_image'] != ""){$ref_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['ref_image'];}
			if($data['win_image'] != ""){$win_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['win_image'];}
			if($data['water_image'] != ""){$water_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['water_image'];}
			if($data['kitchen_image'] != ""){$kitchen_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['kitchen_image'];}


			$msg .= '<br><br> <h3>Central Split AC</h3>' ;
			$msg .= '  Manufacturer: <b>'.$data['cs_manufacturer'].'</b><br> ';
			$msg .= '  Model Number: <b>'.$data['cs_model'].'</b><br> ';
			$msg .= '  Serial Number: <b>'.$data['cs_serial'].'</b><br> ';
			$msg .= '  Tonnage: <b>'.$data['cs_tonnage'].'</b><br> ';
			$msg .= '  Seers: <b>'.$data['cs_seer'].'</b><br> ';


			$msg .= '<br><br> <h3>Central Gas Furnace</h3>' ;
			$msg .= '  Manufacturer: <b>'.$data['cg_manufacturer'].'</b><br> ';
			$msg .= '  Model Number: <b>'.$data['cg_model'].'</b><br> ';
			$msg .= '  Serial Number: <b>'.$data['cg_serial'].'</b><br> ';
			$msg .= '  BTU Input: <b>'.$data['cg_btu_input'].'</b><br> ';
			$msg .= '  BTU Output: <b>'.$data['cg_btu_output'].'</b><br> ';
			$msg .= '  Efficiency: <b>'.$data['cg_efficiency'].'</b><br> ';
			$msg .= '  Full Title 24?: <b>'.$data['cg_fulltime'].'</b><br> ';

			$msg .= '<br><br> <h3>AC Coil</h3>' ;
			$msg .= '  Manufacturer: <b>'.$data['acc_manufacturer'].'</b><br> ';
			$msg .= '  Model Number: <b>'.$data['acc_model'].'</b><br> ';
			$msg .= '  Serial Number: <b>'.$data['acc_serial'].'</b><br> ';

			$msg .= $notes;

			$msg .= ' <br> Central Split AC: <br><b><img src="'. $cs_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Central Gas Furnace: <br><b><img src="'. $cg_image.'" width="300px"></b><br> ';
			$msg .= ' <br> AC Coil: <br><b><img src="'. $acc_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Refrigerant: <br><b><img src="'. $ref_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Windows Image: <br><b><img src="'. $win_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Water Image: <br><b><img src="'. $water_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Kitchen Hood Image: <br><b><img src="'. $kitchen_image.'" width="300px"></b><br> ';
			$msg .= ' </body></html> ';

		}else if ($pu == "Heat_Pump"){

			$heat_image = ""; $air_image = "";  $ref_image = "";  $win_image = ""; $water_image = ""; $kitchen_image = "";
			if($data['heat_image'] != ""){$heat_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['heat_image'];}
			if($data['air_image'] != ""){$air_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['air_image'];}
			if($data['ref_image'] != ""){$ref_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['ref_image'];}
			if($data['win_image'] != ""){$win_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['win_image'];}
			if($data['water_image'] != ""){$water_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['water_image'];}
			if($data['kitchen_image'] != ""){$kitchen_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['kitchen_image'];}
			
			$msg .= '<br><br> <h3>Heat Pump</h3>' ;
			$msg .= '  Manufacturer: <b>'.$data['heat_manufacturer'].'</b><br> ';
			$msg .= '  Model Number: <b>'.$data['heat_model'].'</b><br> ';
			$msg .= '  Serial Number: <b>'.$data['heat_serial'].'</b><br> ';
			$msg .= '  Tonnage: <b>'.$data['heat_tonnage'].'</b><br> ';
			$msg .= '  Seers: <b>'.$data['heat_seer'].'</b><br> ';


			$msg .= '<br><br> <h3>Air Handler</h3>' ;
			$msg .= '  Manufacturer: <b>'.$data['air_manufacturer'].'</b><br> ';
			$msg .= '  Model Number: <b>'.$data['air_model'].'</b><br> ';
			$msg .= '  Serial Number: <b>'.$data['air_serial'].'</b><br> ';
			$msg .= '  BTU Input: <b>'.$data['air_btu_input'].'</b><br> ';
			$msg .= '  BTU Output: <b>'.$data['air_btu_output'].'</b><br> ';
			$msg .= '  Efficiency: <b>'.$data['air_efficiency'].'</b><br> ';
			$msg .= '  Full Title 24?: <b>'.$data['air_fulltime'].'</b><br> ';

			$msg .= $notes;

			$msg .= ' <br> Heat Pump: <br><b><img src="'. $heat_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Air Handler: <br><b><img src="'. $air_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Refrigerant: <br><b><img src="'. $ref_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Windows Image: <br><b><img src="'. $win_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Water Image: <br><b><img src="'. $water_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Kitchen Hood Image: <br><b><img src="'. $kitchen_image.'" width="300px"></b><br> ';

			$msg .= ' </body></html> ';
		}else{


			$con_image = ""; $in_image = "";   $win_image = ""; $water_image = ""; $kitchen_image = "";
			if($data['con_image'] != ""){$con_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['con_image'];}
			if($data['in_image'] != ""){$in_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['in_image'];}
			if($data['win_image'] != ""){$win_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['win_image'];}
			if($data['water_image'] != ""){$water_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['water_image'];}
			if($data['kitchen_image'] != ""){$kitchen_image = $this->config->item('base_url').'uploads/'.$data['test_name'].'/'.$data['kitchen_image'];}

			$msg .= '<br><br> <h3>Condenser</h3>' ;
			$msg .= '  Manufacturer: <b>'.$data['con_manufacturer'].'</b><br> ';
			$msg .= '  Model Number: <b>'.$data['con_model'].'</b><br> ';
			$msg .= '  Serial Number: <b>'.$data['con_serial'].'</b><br> ';
			$msg .= '  BTU Input: <b>'.$data['con_btu_input'].'</b><br> ';
			$msg .= '  Toonage: <b>'.$data['con_tonnage'].'</b><br> ';
			$msg .= '  Seer: <b>'.$data['con_seer'].'</b><br> ';


			$msg .= '<br><br> <h3>Indoor Unit</h3>' ;
			$msg .= '  Manufacturer: <b>'.$data['in_manufacturer'].'</b><br> ';
			$msg .= '  Model Number: <b>'.$data['in_model'].'</b><br> ';
			$msg .= '  Serial Number: <b>'.$data['in_serial'].'</b><br> ';
			$msg .= '  BTU Input: <b>'.$data['in_btu_input'].'</b><br> ';
			$msg .= '  BTU Output: <b>'.$data['in_btu_output'].'</b><br> ';
			$msg .= '  Pounds: <b>'.$data['in_pounds'].'</b><br> ';
			$msg .= '  Ounces: <b>'.$data['in_ounces'].'</b><br> ';
			$msg .= '  Full Title 24?: <b>'.$data['in_fulltime'].'</b><br> ';
			$msg .= ' Notes: <b>'.$data['notes'].'</b><br> ';


			$msg .= ' <br> Condenser: <br><b><img src="'. $con_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Indoor Unit: <br><b><img src="'. $in_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Windows Image: <br><b><img src="'. $win_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Water Image: <br><b><img src="'. $water_image.'" width="300px"></b><br> ';
			$msg .= ' <br> Kitchen Hood Image: <br><b><img src="'. $kitchen_image.'" width="300px"></b><br> ';


			$msg .= ' </body></html> ';

		}


		// $content = chunk_split(base64_encode(file_get_contents($file)));
		// $uid = md4(uniqid(time()));

		// $headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
		// $headers .= "Content-Transfer-Encoding: base64\r\n";
		// $headers .= "Content-Disposition: attachment; filename=\"".$file_name."\"\r\n\r\n";

		// $headers .= "Content-type:text/plain; charset=iso-8859-1\r\n";
		// $headers .= "Content-Transfer-Encoding: 7bit\r\n\r\n";


		// //$msg .= "--$boundary\r\n";
		// $msg .="Content-Type: $type; name=".$name."\r\n";
		// $msg .="Content-Disposition: attachment; filename=".$name."\r\n";
		// $msg .="Content-Transfer-Encoding: base64\r\n";
		// $msg .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
		// $msg .= $encoded_content; // Attaching the encoded file with email
    


		mail($to, $subject, $msg, $headers);

        // if(mail($to, $subject, $msg, $headers)){

		// 	$this->session->set_flashdata('c1message_success', 'Form Submitted Successfully!');
        //     redirect('contact');
		// } else{
		// 	$this->session->set_flashdata('c1message_error', 'Failed!');
        //     redirect('contact');
		// }
	}






	public function email1($data,$linked,$order)
    {
            $this->load->library('Pdf');
       
            // $this->load->model('M_Form');
            // $data = $this->M_Form->getByIdWithTech($id);

        //   echo "<pre>";
        //   print_r($data);

            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetPrintHeader(false);
            $pdf->SetPrintFooter(false);

            $pdf->SetTitle('Her Test');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Mams');
            $pdf->SetSubject('Her Test');                 
            $pdf->SetDisplayMode('real', 'default');

            $pdf->AddPage();

            $pdf->setJPEGQuality(75);
            $header = '
            <span style="font-size: 20px; font-weight:bold; text-decoration: underline;">Her Test Form</span> <br>
            ';

           $pu = $data["unit_type"];

            $basicInfo = '
                <table border="0" style="font-size:10px;">
                        <tr>
                            <td width="100px">Test Name: </td>
                            <td width="160px"><b>'.$data["test_name"].'</b></td>

                            <td width="100px">Company Name: </td>
                            <td width="160px"><b>'.$data["company_name"].'</b></td>
                        </tr>                             
                        <tr>
                            <td>Site Address: </td>
                            <td><b>'.$data["site_address"].'</b></td>

                            <td>Duct Location: </td>
                            <td><b>'.$data["duct_location"].'</b></td>
                        </tr>                          
                        <tr>
                            <td>Email: </td>
                            <td><b>'.$data["email"].'</b></td>

                            <td># of Bedroom: </td>
                            <td><b>'.$data["number_of_bedroom"].'</b></td>
                        </tr>  
                        <tr>
                            <td>Unit Type: </td>
                            <td><b>'.$pu.'</b></td>

                            <td>Technician : </td>
                            <td><b>'.$data["tech_name"].'</b></td>
                        </tr>
                </table>
            ';

            $notes = '<br><br>
            <span style=" font-size: 11px; font-weight:bold; ">
            Test Result
            </span><br>
            <table border="0" style="font-size:10px;">
                <tr>
                    <td width="100px">Duct Leakage CFM Result : </td>
                    <td width="160px"><b>'.$data["test_duct_leak_result"].'</b></td>

                    <td width="100px">Duct Leakage CFM: </td>
                    <td width="160px"><b>'.$data["test_ductLeakage"].'</b></td>
                </tr>

                <tr>
                    <td>Fan Watt Draw: </td>
                    <td><b>'.$data["test_fanWatt"].'</b></td>

                    
                </tr>

                <tr>
                    <td>CFM (Return 1): </td>
                    <td><b>'.$data["test_cfm1"].'</b></td>

                    <td>Location (Return 1): </td>
                    <td><b>'.$data["test_location1"].'</b></td>
                </tr>

                <tr>
                    <td>CFM (Return 2): </td>
                    <td><b>'.$data["test_cfm2"].'</b></td>

                    <td>Location (Return 2): </td>
                    <td><b>'.$data["test_location2"].'</b></td>
                </tr>

                <tr>
                    <td>CFM (Return 3): </td>
                    <td><b>'.$data["test_cfm3"].'</b></td>

                    <td>Location (Return 3): </td>
                    <td><b>'.$data["test_location3"].'</b></td>
                </tr>

                <tr>
                    <td>CFM (Return 4): </td>
                    <td><b>'.$data["test_cfm4"].'</b></td>

                    <td>Location (Return 4): </td>
                    <td><b>'.$data["test_location4"].'</b></td>
                </tr>

                <tr>
                    <td>CFM (Return 5): </td>
                    <td><b>'.$data["test_cfm5"].'</b></td>

                    <td>Location (Return 5): </td>
                    <td><b>'.$data["test_location5"].'</b></td>
                </tr>
            
            </table>


            <br><br>
            <span style=" font-size: 11px; font-weight:bold; ">
            Notes
            </span><br>
            <table border="0" style="font-size:10px;">
                <tr>
                    <td width="100px">Notes : </td>
                    <td width="400px"><b>'.$data["notes"].'</b></td>                                
                </tr>                         
            </table>';

            $unit = "";   
                            
        if($pu == "Package_Unit"){

            $kitchen_image = $data["kitchen_image"];
            if($kitchen_image != ""){$kitchen_image = '<img src="uploads/'.$data["test_name"].'/'.$data["kitchen_image"].'">';}

            $pu_image = $data["pu_image"];
            if($pu_image != ""){$pu_image = '<img src="uploads/'.$data["test_name"].'/'.$data["pu_image"].'">';}

            $win_image = $data["win_image"];
            if($win_image != ""){$win_image = '<img src="uploads/'.$data["test_name"].'/'.$data["win_image"].'">';}

            $water_image = $data["water_image"];
            if($water_image != ""){$water_image = '<img src="uploads/'.$data["test_name"].'/'.$data["water_image"].'">';}


        

            $unit = '
            <span style=" font-size: 11px; font-weight:bold;">
                Package Unit
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="100px">Manufacturer : </td>
                        <td width="160px"><b>'.$data["pu_manufacturer"].'</b></td>

                        <td width="100px">Model Number: </td>
                        <td width="160px"><b>'.$data["pu_model"].'</b></td>
                    </tr>

                    <tr>
                        <td>Serial Number: </td>
                        <td><b>'.$data["pu_serial"].'</b></td>

                        <td>BTU Input: </td>
                        <td><b>'.$data["pu_btu_input"].'</b></td>
                    </tr>

                    <tr>
                        <td>BTU Output: </td>
                        <td><b>'.$data["pu_btu_output"].'</b></td>

                        <td>Efficiency: </td>
                        <td><b>'.$data["pu_efficiency"].'</b></td>
                    </tr>

                    <tr>
                        <td>Tonnage: </td>
                        <td><b>'.$data["pu_tonnage"].'</b></td>

                        <td>Seers: </td>
                        <td><b>'.$data["pu_seer"].'</b></td>
                    </tr>

                    <tr>
                        <td width="100px">Full Title 24? : </td>
                        <td width="160px"><b>'.$data["pu_fulltime"].'</b></td>

                    </tr>
                </table>

                '.$notes.'


                <br><br>
                <span style=" font-size: 11px; font-weight:bold; ">
                Images
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="170px" style="text-align: center; height:150px; ">Package Unit :<br>'.$pu_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Windows :<br>'.$win_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Water :<br>'.$water_image.'</td>
                    </tr>   
                    
                    <tr>
                        <td width="170px" style="text-align: center; height:150px; ">Kitchen Hood :<br>'.$kitchen_image.'</td>
                        
                    </tr>  
                </table>

            ';

        }else if ($pu == "Central_Split_AC"){


            

            $cs_image = $data["cs_image"];
            if($cs_image != ""){$cs_image = '<img src="uploads/'.$data["test_name"].'/'.$data["cs_image"].'">';}

            $cg_image = $data["cg_image"];
            if($cg_image != ""){$cg_image = '<img src="uploads/'.$data["test_name"].'/'.$data["cg_image"].'">';}

            $acc_image = $data["acc_image"];
            if($acc_image != ""){$acc_image = '<img src="uploads/'.$data["test_name"].'/'.$data["acc_image"].'">';}

            $ref_image = $data["ref_image"];
            if($ref_image != ""){$ref_image = '<img src="uploads/'.$data["test_name"].'/'.$data["ref_image"].'">';}

            $win_image = $data["win_image"];
            if($win_image != ""){$win_image = '<img src="uploads/'.$data["test_name"].'/'.$data["win_image"].'">';}

            $water_image = $data["water_image"];
            if($water_image != ""){$water_image = '<img src="uploads/'.$data["test_name"].'/'.$data["water_image"].'">';}

            $kitchen_image = $data["kitchen_image"];
            if($kitchen_image != ""){$kitchen_image = '<img src="uploads/'.$data["test_name"].'/'.$data["kitchen_image"].'">';}

            
            $unit = '
            <span style=" font-size: 11px; font-weight:bold;">
                Central Split AC
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="100px">Manufacturer : </td>
                        <td width="160px"><b>'.$data["cs_manufacturer"].'</b></td>

                        <td width="100px">Model Number: </td>
                        <td width="160px"><b>'.$data["cs_model"].'</b></td>
                    </tr>

                    <tr>
                        <td>Serial Number: </td>
                        <td><b>'.$data["cs_serial"].'</b></td>

                        <td>Toonage: </td>
                        <td><b>'.$data["cs_tonnage"].'</b></td>
                    </tr>

                    <tr>
                        <td>Seer: </td>
                        <td><b>'.$data["cs_seer"].'</b></td>

                    </tr>
                    
                </table>
                <br><br>

                <span style=" font-size: 11px; font-weight:bold;">
                Central Gas Furnace
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="100px">Manufacturer : </td>
                        <td width="160px"><b>'.$data["cg_manufacturer"].'</b></td>

                        <td width="100px">Model Number: </td>
                        <td width="160px"><b>'.$data["cg_model"].'</b></td>
                    </tr>

                    <tr>
                        <td>Serial Number: </td>
                        <td><b>'.$data["cg_serial"].'</b></td>

                        <td>BTU Input: </td>
                        <td><b>'.$data["cg_btu_input"].'</b></td>
                    </tr>

                        <tr>
                        <td>BTU Output: </td>
                        <td><b>'.$data["cg_btu_output"].'</b></td>

                        <td>Efficiency: </td>
                        <td><b>'.$data["cg_efficiency"].'</b></td>
                    </tr>
                        <tr>
                        <td>Full Title 24?: </td>
                        <td><b>'.$data["cg_fulltime"].'</b></td>                              
                    </tr>                          
                </table>

                <br><br>

                <span style=" font-size: 11px; font-weight:bold;">
                AC Coil
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="100px">Manufacturer : </td>
                        <td width="160px"><b>'.$data["acc_manufacturer"].'</b></td>

                        <td width="100px">Model Number: </td>
                        <td width="160px"><b>'.$data["acc_model"].'</b></td>
                    </tr>

                    <tr>
                        <td>Serial Number: </td>
                        <td><b>'.$data["acc_serial"].'</b></td>

                        
                    </tr>            
                </table>

                '.$notes.'

                <br><br>
                <span style=" font-size: 11px; font-weight:bold; ">
                Images
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="170px" style="text-align: center; height:150px; ">Central Split AC :<br>'.$cs_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Central Gas Furnace :<br>'.$cg_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">AC Coil :<br>'.$acc_image.'</td>
                    </tr>   

                        <tr>
                        <td width="170px" style="text-align: center; height:150px; ">Refrigerant :<br>'.$ref_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Windows :<br>'.$win_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Water Heater :<br>'.$water_image.'</td>
                    </tr>   
                    <tr>
                        <td width="170px" style="text-align: center; height:150px; ">Kitchen Hood :<br>'.$kitchen_image.'</td>
                    </tr>   
                </table>

            ';
        }else if ($pu == "Heat_Pump"){

            $heat_image = $data["heat_image"];
            if($heat_image != ""){$heat_image = '<img src="uploads/'.$data["test_name"].'/'.$data["heat_image"].'">';}

            $air_image = $data["air_image"];
            if($air_image != ""){$air_image = '<img src="uploads/'.$data["test_name"].'/'.$data["air_image"].'">';}

            $ref_image = $data["ref_image"];
            if($ref_image != ""){$ref_image = '<img src="uploads/'.$data["test_name"].'/'.$data["ref_image"].'">';}

            $win_image = $data["win_image"];
            if($win_image != ""){$win_image = '<img src="uploads/'.$data["test_name"].'/'.$data["win_image"].'">';}

            $water_image = $data["water_image"];
            if($water_image != ""){$water_image = '<img src="uploads/'.$data["test_name"].'/'.$data["water_image"].'">';}

            $kitchen_image = $data["kitchen_image"];
            if($kitchen_image != ""){$kitchen_image = '<img src="uploads/'.$data["test_name"].'/'.$data["kitchen_image"].'">';}

            
            $unit = '
            <span style=" font-size: 11px; font-weight:bold;">
                Heat Pump
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="100px">Manufacturer : </td>
                        <td width="160px"><b>'.$data["heat_manufacturer"].'</b></td>

                        <td width="100px">Model Number: </td>
                        <td width="160px"><b>'.$data["heat_model"].'</b></td>
                    </tr>

                    <tr>
                        <td>Serial Number: </td>
                        <td><b>'.$data["heat_serial"].'</b></td>

                        <td>Toonage: </td>
                        <td><b>'.$data["heat_tonnage"].'</b></td>
                    </tr>

                    <tr>
                        <td>Seer: </td>
                        <td><b>'.$data["heat_seer"].'</b></td>

                    </tr>
                    
                </table>
                <br><br>

                <span style=" font-size: 11px; font-weight:bold;">
                Air Handler
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="100px">Manufacturer : </td>
                        <td width="160px"><b>'.$data["air_manufacturer"].'</b></td>

                        <td width="100px">Model Number: </td>
                        <td width="160px"><b>'.$data["air_model"].'</b></td>
                    </tr>

                    <tr>
                        <td>Serial Number: </td>
                        <td><b>'.$data["air_serial"].'</b></td>

                        <td>BTU Input: </td>
                        <td><b>'.$data["air_btu_input"].'</b></td>
                    </tr>

                        <tr>
                        <td>BTU Output: </td>
                        <td><b>'.$data["air_btu_output"].'</b></td>

                        <td>Efficiency: </td>
                        <td><b>'.$data["air_efficiency"].'</b></td>
                    </tr>
                        <tr>
                        <td>Full Title 24?: </td>
                        <td><b>'.$data["air_fulltime"].'</b></td>                              
                    </tr>                          
                </table>

                
                '.$notes.'

                <br><br>
                <span style=" font-size: 11px; font-weight:bold; ">
                Images
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="170px" style="text-align: center; height:150px; ">Heat Pump :<br>'.$heat_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Air Handler :<br>'.$air_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Refrigerant :<br>'.$ref_image.'</td>
                    </tr>   

                        <tr>
                        <td width="170px" style="text-align: center; height:150px; ">Windows :<br>'.$win_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Water Heater :<br>'.$water_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Kitchen Hood :<br>'.$kitchen_image.'</td>

                    </tr>  
                        
                </table>';

        }else{

            $con_image = $data["con_image"];
            if($con_image != ""){$con_image = '<img src="uploads/'.$data["test_name"].'/'.$data["con_image"].'">';}

            $in_image = $data["in_image"];
            if($in_image != ""){$in_image = '<img src="uploads/'.$data["test_name"].'/'.$data["in_image"].'">';}

            $win_image = $data["win_image"];
            if($win_image != ""){$win_image = '<img src="uploads/'.$data["test_name"].'/'.$data["win_image"].'">';}

            $water_image = $data["water_image"];
            if($water_image != ""){$water_image = '<img src="uploads/'.$data["test_name"].'/'.$data["water_image"].'">';}

            $kitchen_image = $data["kitchen_image"];
            if($kitchen_image != ""){$kitchen_image = '<img src="uploads/'.$data["test_name"].'/'.$data["kitchen_image"].'">';}

            
            $unit = '
            <span style=" font-size: 11px; font-weight:bold;">
                Condenser
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="100px">Manufacturer: </td>
                        <td width="160px"><b>'.$data["con_manufacturer"].'</b></td>

                        <td width="100px">Model Number: </td>
                        <td width="160px"><b>'.$data["con_model"].'</b></td>
                    </tr>

                    <tr>
                        <td>Serial Number: </td>
                        <td><b>'.$data["con_serial"].'</b></td>

                        <td>BTU Input: </td>
                        <td><b>'.$data["con_btu_input"].'</b></td>                                
                    </tr>

                    <tr>
                        <td>Toonage: </td>
                        <td><b>'.$data["con_tonnage"].'</b></td>

                        <td>Seer: </td>
                        <td><b>'.$data["con_seer"].'</b></td>
                    </tr>
                    
                </table>
                <br><br>

                <span style=" font-size: 11px; font-weight:bold;">
                Indoor Unit
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="100px">Manufacturer : </td>
                        <td width="160px"><b>'.$data["in_manufacturer"].'</b></td>

                        <td width="100px">Model Number: </td>
                        <td width="160px"><b>'.$data["in_model"].'</b></td>
                    </tr>

                    <tr>
                        <td>Serial Number: </td>
                        <td><b>'.$data["in_serial"].'</b></td>

                        <td>BTU Input: </td>
                        <td><b>'.$data["in_btu_input"].'</b></td>
                    </tr>

                        <tr>
                        <td>BTU Output: </td>
                        <td><b>'.$data["in_btu_output"].'</b></td>

                        <td>Pounds: </td>
                        <td><b>'.$data["in_pounds"].'</b></td>
                    </tr>
                        <tr>
                        <td>Ounces: </td>
                        <td><b>'.$data["in_ounces"].'</b></td>

                        <td>Full Title 24?: </td>
                        <td><b>'.$data["in_fulltime"].'</b></td>                              
                    </tr>                          
                </table>

                
                <br><br>
                <span style=" font-size: 11px; font-weight:bold; ">
                Notes
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="100px">Notes : </td>
                        <td width="400px"><b>'.$data["notes"].'</b></td>                                
                    </tr>                         
                </table>

                <br><br>
                <span style=" font-size: 11px; font-weight:bold; ">
                Images
                </span><br>
                <table border="0" style="font-size:10px;">
                    <tr>
                        <td width="170px" style="text-align: center; height:150px; ">Condenser :<br>'.$con_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Indoor Unit :<br>'.$in_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Windows :<br>'.$win_image.'</td>
                    </tr>   

                        <tr>
                        <td width="170px" style="text-align: center; height:150px; ">Water Heater :<br>'.$water_image.'</td>
                        <td width="170px" style="text-align: center; height:150px; ">Kitchen Hood :<br>'.$kitchen_image.'</td>

                    </tr>  
                        
                </table>';


        }

            
            $html = '<table border="1" cellspacing="1.5">
                <tr>
                <td colspan="2" style="text-align: center;">
                '.$header.'
                </td>
                </tr>

                <tr>
                <td colspan="2" > <span style=" font-size: 13px; font-weight:bold;">
                Information
                </span><br>
                '.$basicInfo.'
                </td>
                </tr>

                <tr>
                <td colspan="2" >
                
                '.$unit.'
                </td>
                
                </tr>


                

            </table>                 
            ';


            $pdf->writeHTML($html, true, false, true, false, '');                  
            //$pdf->Output('HersTest_'.$data["test_name.'.pdf', 'I');
        //   $LocationOnServer = 'C:\wamp64\www\projectname\uploads\invoices/\/';

		//  $LocationOnServer = 'https://softmaticsolution.com/cl/hers/uploads/';
	

			$fn = $_SERVER['DOCUMENT_ROOT'].$data["test_name"];
			$FileNamePath = $fn . $order .'.pdf';
            ob_clean();
			$pdf->Output($FileNamePath, 'F');
			
			if($linked == '1'){
				$this->SendEmail1($fn,'1');
			}
			if($linked == '2' && $order == '_2'){
				$this->SendEmail1($fn,'2');
			}
			if($linked == '3' && $order == '_3'){
				$this->SendEmail1($fn,'3');
			}
			


            // if(!empty($FileNamePath)){
            // $this->SendEmail1($FileNamePath);
            // }
            // else{
            //     print_r('Could not trace file path');
            // } 

    }


    function SendEmail1($FileNamePath,$qty){


		$data['users'] = $this->M_Hers->get();
		$data['user_single'] = $data['users'][0];
		$email = $data['user_single']->u_email;

        $this->load->library("Phpmailer_library");

        $mail = $this->phpmailer_library->load();


		// $mail->setFrom('info@softmaticsolution.com', 'Hers Test');
		$mail->setFrom('info@energymastersforms.com', 'Hers Test');
		//$mail->addAddress('farazahmed34296@gmail.com', 'Faraz Ahmed');     //Add a recipient
		$mail->addAddress($email, 'Hers Test');     //Add a recipient
        // $to = "maoraizenkut@gmail.com, farazahmed34296@gmail.com";
        $mail->addAttachment($FileNamePath.'_1.pdf'); 

		if($qty == 2 ){
			$mail->addAttachment($FileNamePath.'_2.pdf'); 
		}
		else if($qty == 3 ){
			$mail->addAttachment($FileNamePath.'_2.pdf'); 
			$mail->addAttachment($FileNamePath.'_3.pdf'); 
		}

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Hers Test Submitted';
        $mail->Body    = 'Hers Test Form is submitted in the website <br> Kindly Find Attached File';
        $mail->AltBody = 'Hers Test Form is submitted in the website. Kindly Find Attached File';
		
		$mail->send();
        // if(!$mail->send()){
        //     echo 'Mail could not be sent.';
        //     echo 'Mailer Error: ' . $mail->ErrorInfo;
        // }else{
        //     echo 'Mail has been sent2';
        // }
        
	}
	
	public function testForm(){
		
		$data['users'] = $this->M_Hers->get();
		$data['user_single'] = $data['users'][0];
		//$email = $data['user_single']['u_email'];

		echo "<pre>";
		print_r($data['user_single']->u_email);
	} 

}