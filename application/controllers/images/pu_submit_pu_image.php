<?php
$images = array();
		for($j=0; $j<count($this->input->post($ini . 'manufacturer')); $j++){

		
			$fName = $ini . "image" . ($j+1);
	
			   $fn = array ();
				$countfiles = count($_FILES[$fName]['name']);
				
				$path = './uploads/' . $test_name;
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
							$full_name = $path . '/' . $new_name;				
							$info = getimagesize($full_name);
				
							if ($info['mime'] == 'image/jpeg') 
								$image = imagecreatefromjpeg($full_name);
				
							elseif ($info['mime'] == 'image/gif') 
								$image = imagecreatefromgif($full_name);
				
							elseif ($info['mime'] == 'image/png') 
								$image = imagecreatefrompng($full_name);
				
							imagejpeg($image, $full_name, 60);
					}
	
					unset($this->upload);
	
				}
	
			   $file[$fName] =  implode(',',$fn);
			   array_push($images, $file[$fName]);
            }
            
            ?>