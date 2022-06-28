<?php 
      class PdfReport extends CI_Controller{
            function __construct() 
            { 
                  parent::__construct();
                  $this->load->library('Pdf');
            } 
            function index()
            {            
                  
            }

            public function adminCheck(){
                $role = $this->session->userdata('role');
                if($role != 'admin'){
                    $this->session->set_flashdata('message_error', 'Kindly Login First!');
                    redirect('login');
                }        
            }

            public function hersReport($id)
            {

                $this->adminCheck();
                  $this->load->model('M_Form');
                  $data = $this->M_Form->getByIdWithTech($id);

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

                  $pu = $data->unit_type;
                //   '.$id.'
                  $basicInfo = '
                        <table border="0" style="font-size:10px;">
                              <tr>
                                    <td width="100px">Test Name: </td>
                                    <td width="160px"><b>'.$data->test_name.'</b></td>

                                    <td width="100px">Company Name: </td>
                                    <td width="160px"><b>'.$data->company_name.'</b></td>
                              </tr>                             
                              <tr>
                                    <td>Site Address: </td>
                                    <td><b>'.$data->site_address.'</b></td>

                                    <td>Duct Location: </td>
                                    <td><b>'.$data->duct_location.'</b></td>
                              </tr>                          
                              <tr>
                                    <td>Email: </td>
                                    <td><b>'.$data->email.'</b></td>

                                    <td># of Bedroom: </td>
                                    <td><b>'.$data->number_of_bedroom.'</b></td>
                              </tr>  
                              <tr>
                                    <td>Unit Type: </td>
                                    <td><b>'.$pu.'</b></td>

                                    <td>Technician : </td>
                                    <td><b>'.$data->tech_name.'</b></td>
                              </tr>
                        </table>
                  ';

                  $notes = '<br><br>
                  <span style=" font-size: 11px; font-weight:bold; ">
                  Test Result
                  </span><br>
                  <table border="0" style="font-size:10px;">
                      <tr>
                          <td width="130px">Duct Leakage CFM Result : </td>
                          <td width="160px"><b>'.$data->test_duct_leak_result.'</b></td>
                          <td></td><td></td>
                        </tr>
                        <tr>
                          <td width="130px">Duct Leakage CFM: </td>
                          <td width="160px"><b>'.$data->test_ductLeakage.'</b></td>
                          <td></td><td></td>
                      </tr>

                      <tr>
                          <td>Fan Watt Draw: </td>
                          <td><b>'.$data->test_fanWatt.'</b></td>
                          <td></td><td></td>

                         
                      </tr>
                      <tr>
                        <td colspan=4>
                        <b>Airflow CFM Result</b>
                        </td>
                      </tr>

                      <tr>
                          <td>CFM (Return 1): </td>
                          <td><b>'.$data->test_cfm1.'</b></td>

                          <td>Location (Return 1): </td>
                          <td><b>'.$data->test_location1.'</b></td>
                      </tr>

                      <tr>
                          <td>CFM (Return 2): </td>
                          <td><b>'.$data->test_cfm2.'</b></td>

                          <td>Location (Return 2): </td>
                          <td><b>'.$data->test_location2.'</b></td>
                      </tr>

                      <tr>
                          <td>CFM (Return 3): </td>
                          <td><b>'.$data->test_cfm3.'</b></td>

                          <td>Location (Return 3): </td>
                          <td><b>'.$data->test_location3.'</b></td>
                      </tr>

                      <tr>
                          <td>CFM (Return 4): </td>
                          <td><b>'.$data->test_cfm4.'</b></td>

                          <td>Location (Return 4): </td>
                          <td><b>'.$data->test_location4.'</b></td>
                      </tr>

                      <tr>
                          <td>CFM (Return 5): </td>
                          <td><b>'.$data->test_cfm5.'</b></td>

                          <td>Location (Return 5): </td>
                          <td><b>'.$data->test_location5.'</b></td>
                      </tr>
                   
                  </table>


                  <br><br>
                  <span style=" font-size: 11px; font-weight:bold; ">
                  Notes
                  </span><br>
                  <table border="0" style="font-size:10px;">
                      <tr>
                          <td width="100px">Notes : </td>
                          <td width="400px"><b>'.$data->notes.'</b></td>                                
                      </tr>                         
                  </table>';

                  $unit = "";   
                                 
                if($pu == "Package_Unit"){

                    $kitchen_image = $data->kitchen_image;
                    if($kitchen_image != ""){$kitchen_image = '<img src="uploads/'.$data->test_name.'/'.$data->kitchen_image.'"  style="image-orientation: from-image !important;">';}

                    $pu_image = $data->pu_image;
                    if($pu_image != ""){$pu_image = '<img src="uploads/'.$data->test_name.'/'.$data->pu_image.'"  style="image-orientation: from-image !important;">';}

                    $win_image = $data->win_image;
                    if($win_image != ""){$win_image = '<img src="uploads/'.$data->test_name.'/'.$data->win_image.'"  style="image-orientation: from-image !important;">';}

                    $water_image = $data->water_image;
                    if($water_image != ""){$water_image = '<img src="uploads/'.$data->test_name.'/'.$data->water_image.'"  style="image-orientation: from-image !important;">';}


               

                  $unit = '
                  <table border="1">
                    <tr><td>
                  <span style=" font-size: 11px; font-weight:bold;">
                        Package Unit
                        </span><br>
                        <table border="0" style="font-size:10px;">
                            <tr>
                                <td width="100px">Manufacturer : </td>
                                <td width="160px"><b>'.$data->pu_manufacturer.'</b></td>

                                <td width="100px">Model Number: </td>
                                <td width="160px"><b>'.$data->pu_model.'</b></td>
                            </tr>

                            <tr>
                                <td>Serial Number: </td>
                                <td><b>'.$data->pu_serial.'</b></td>

                                <td>BTU Input: </td>
                                <td><b>'.$data->pu_btu_input.'</b></td>
                            </tr>

                            <tr>
                                <td>BTU Output: </td>
                                <td><b>'.$data->pu_btu_output.'</b></td>

                                <td>Efficiency: </td>
                                <td><b>'.$data->pu_efficiency.'</b></td>
                            </tr>

                            <tr>
                                <td>Tonnage: </td>
                                <td><b>'.$data->pu_tonnage.'</b></td>

                                <td>Seers: </td>
                                <td><b>'.$data->pu_seer.'</b></td>
                            </tr>

                            <tr>
                                <td width="100px">Full Title 24? : </td>
                                <td width="160px"><b>'.$data->pu_fulltime.'</b></td>
 
                            </tr>
                        </table>
                        </td>
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


                    

                    $cs_image = $data->cs_image;
                    if($cs_image != ""){$cs_image = '<img src="uploads/'.$data->test_name.'/'.$data->cs_image.'"  style="image-orientation: from-image !important;">';}

                    $cg_image = $data->cg_image;
                    if($cg_image != ""){$cg_image = '<img src="uploads/'.$data->test_name.'/'.$data->cg_image.'"   style="image-orientation: from-image !important;">';}

                    $acc_image = $data->acc_image;
                    if($acc_image != ""){$acc_image = '<img src="uploads/'.$data->test_name.'/'.$data->acc_image.'"   style="image-orientation: from-image !important;">';}

                    $ref_image = $data->ref_image;
                    if($ref_image != ""){$ref_image = '<img src="uploads/'.$data->test_name.'/'.$data->ref_image.'"   style="image-orientation: from-image !important;">';}

                    $win_image = $data->win_image;
                    if($win_image != ""){$win_image = '<img src="uploads/'.$data->test_name.'/'.$data->win_image.'"   style="image-orientation: from-image !important;">';}

                    $water_image = $data->water_image;
                    if($water_image != ""){$water_image = '<img src="uploads/'.$data->test_name.'/'.$data->water_image.'"   style="image-orientation: from-image !important;">';}

                    $kitchen_image = $data->kitchen_image;
                    if($kitchen_image != ""){$kitchen_image = '<img src="uploads/'.$data->test_name.'/'.$data->kitchen_image.'"   style="image-orientation: from-image !important;">';}

                    
                    $unit = '
                    <table border="1">
                    <tr><td>
                    <span style=" font-size: 11px; font-weight:bold;">
                        Central Split AC
                        </span><br>
                        <table border="0" style="font-size:10px;">
                            <tr>
                                <td width="100px">Manufacturer : </td>
                                <td width="160px"><b>'.$data->cs_manufacturer.'</b></td>
                            </tr>
                            <tr>
                                <td width="100px">Model Number: </td>
                                <td width="160px"><b>'.$data->cs_model.'</b></td>
                            </tr>

                            <tr>
                                <td>Serial Number: </td>
                                <td><b>'.$data->cs_serial.'</b></td>
                            </tr>
                            <tr>
                                <td>Toonage: </td>
                                <td><b>'.$data->cs_tonnage.'</b></td>
                            </tr>

                            <tr>
                                <td>Seer: </td>
                                <td><b>'.$data->cs_seer.'</b></td>

                            </tr>
                          
                        </table>
                        <br><br>

                        </td>

                        <td>

                        <span style=" font-size: 11px; font-weight:bold;">
                        Central Gas Furnace
                        </span><br>
                        <table border="0" style="font-size:10px;">
                            <tr>
                                <td width="100px">Manufacturer : </td>
                                <td width="160px"><b>'.$data->cg_manufacturer.'</b></td>
                            </tr>
                            <tr>
                                <td width="100px">Model Number: </td>
                                <td width="160px"><b>'.$data->cg_model.'</b></td>
                            </tr>

                            <tr>
                                <td>Serial Number: </td>
                                <td><b>'.$data->cg_serial.'</b></td>
                            </tr>
                            <tr>
                                <td>BTU Input: </td>
                                <td><b>'.$data->cg_btu_input.'</b></td>
                            </tr>

                             <tr>
                                <td>BTU Output: </td>
                                <td><b>'.$data->cg_btu_output.'</b></td>
                            </tr>
                            <tr>
                                <td>Efficiency: </td>
                                <td><b>'.$data->cg_efficiency.'</b></td>
                            </tr>
                             <tr>
                                <td>Full Title 24?: </td>
                                <td><b>'.$data->cg_fulltime.'</b></td>                              
                            </tr>                          
                        </table>


                        </td>
                        </tr>
                        </table>
                        <br><br>

                        <span style=" font-size: 11px; font-weight:bold;">
                        AC Coil
                        </span><br>
                        <table border="0" style="font-size:10px;">
                            <tr>
                                <td width="100px">Manufacturer : </td>
                                <td width="160px"><b>'.$data->acc_manufacturer.'</b></td>
                            </tr>
                            <tr>
                                <td width="100px">Model Number: </td>
                                <td width="160px"><b>'.$data->acc_model.'</b></td>
                            </tr>

                            <tr>
                                <td>Serial Number: </td>
                                <td><b>'.$data->acc_serial.'</b></td>

                               
                            </tr>            
                        </table>

                        '.$notes.'

                        <br><br>
                        <span style=" font-size: 11px; font-weight:bold; ">
                        Images
                        </span><br>
                        <table border="0" style="font-size:10px;">
                            <tr>
                                <td width="170px" style="text-align: center; height:170px; ">Central Split AC :<br>'.$cs_image.'</td>
                                <td width="170px" style="text-align: center; height:170px; ">Central Gas Furnace :<br>'.$cg_image.'</td>
                                <td width="170px" style="text-align: center; height:170px; ">AC Coil :<br>'.$acc_image.'</td>
                            </tr>   

                             <tr>
                                <td width="170px" style="text-align: center; height:170px; ">Refrigerant :<br>'.$ref_image.'</td>
                                <td width="170px" style="text-align: center; height:170px; ">Windows :<br>'.$win_image.'</td>
                                <td width="170px" style="text-align: center; height:170px; ">Water Heater :<br>'.$water_image.'</td>
                            </tr>   
                            <tr>
                                <td width="170px" style="text-align: center; height:170px; ">Kitchen Hood :<br>'.$kitchen_image.'</td>
                            </tr>   
                        </table>

                  ';
                }else if ($pu == "Heat_Pump"){

                    $heat_image = $data->heat_image;
                    if($heat_image != ""){$heat_image = '<img src="uploads/'.$data->test_name.'/'.$data->heat_image.'"  style="image-orientation: from-image !important;">';}

                    $air_image = $data->air_image;
                    if($air_image != ""){$air_image = '<img src="uploads/'.$data->test_name.'/'.$data->air_image.'"  style="image-orientation: from-image !important;">';}

                    $ref_image = $data->ref_image;
                    if($ref_image != ""){$ref_image = '<img src="uploads/'.$data->test_name.'/'.$data->ref_image.'"  style="image-orientation: from-image !important;">';}

                    $win_image = $data->win_image;
                    if($win_image != ""){$win_image = '<img src="uploads/'.$data->test_name.'/'.$data->win_image.'"  style="image-orientation: from-image !important;">';}

                    $water_image = $data->water_image;
                    if($water_image != ""){$water_image = '<img src="uploads/'.$data->test_name.'/'.$data->water_image.'"  style="image-orientation: from-image !important;">';}

                    $kitchen_image = $data->kitchen_image;
                    if($kitchen_image != ""){$kitchen_image = '<img src="uploads/'.$data->test_name.'/'.$data->kitchen_image.'"  style="image-orientation: from-image !important;">';}

                    
                    $unit = '
                    <table border="1">
                    <tr><td>
                  <span style=" font-size: 11px; font-weight:bold;">
                        Heat Pump
                        </span><br>
                        <table border="0" style="font-size:10px;">
                            <tr>
                                <td width="100px">Manufacturer : </td>
                                <td width="160px"><b>'.$data->heat_manufacturer.'</b></td>
                            </tr>
                            <tr>
                                <td width="100px">Model Number: </td>
                                <td width="160px"><b>'.$data->heat_model.'</b></td>
                            </tr>

                            <tr>
                                <td>Serial Number: </td>
                                <td><b>'.$data->heat_serial.'</b></td>
                            </tr>
                            <tr>
                                <td>Toonage: </td>
                                <td><b>'.$data->heat_tonnage.'</b></td>
                            </tr>

                            <tr>
                                <td>Seer: </td>
                                <td><b>'.$data->heat_seer.'</b></td>

                            </tr>
                          
                        </table>
                        <br><br>

                        </td>

                        <td>

                        <span style=" font-size: 11px; font-weight:bold;">
                        Air Handler
                        </span><br>
                        <table border="0" style="font-size:10px;">
                            <tr>
                                <td width="100px">Manufacturer : </td>
                                <td width="160px"><b>'.$data->air_manufacturer.'</b></td>
                            </tr>
                            <tr>
                                <td width="100px">Model Number: </td>
                                <td width="160px"><b>'.$data->air_model.'</b></td>
                            </tr>

                            <tr>
                                <td>Serial Number: </td>
                                <td><b>'.$data->air_serial.'</b></td>
                            </tr>
                            <tr>
                                <td>BTU Input: </td>
                                <td><b>'.$data->air_btu_input.'</b></td>
                            </tr>

                             <tr>
                                <td>BTU Output: </td>
                                <td><b>'.$data->air_btu_output.'</b></td>
                            </tr>
                            <tr>
                                <td>Efficiency: </td>
                                <td><b>'.$data->air_efficiency.'</b></td>
                            </tr>
                             <tr>
                                <td>Full Title 24?: </td>
                                <td><b>'.$data->air_fulltime.'</b></td>                              
                            </tr>                          
                        </table>

                        </td>
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

                    $con_image = $data->con_image;
                    if($con_image != ""){$con_image = '<img src="uploads/'.$data->test_name.'/'.$data->con_image.'"  style="image-orientation: from-image !important;" >';}

                    $in_image = $data->in_image;
                    if($in_image != ""){$in_image = '<img src="uploads/'.$data->test_name.'/'.$data->in_image.'"   style="image-orientation: from-image !important;">';}

                    $win_image = $data->win_image;
                    if($win_image != ""){$win_image = '<img src="uploads/'.$data->test_name.'/'.$data->win_image.'"   style="image-orientation: from-image !important;">';}

                    $water_image = $data->water_image;
                    if($water_image != ""){$water_image = '<img src="uploads/'.$data->test_name.'/'.$data->water_image.'"  style="image-orientation: from-image !important;">';}

                    $kitchen_image = $data->kitchen_image;
                    if($kitchen_image != ""){$kitchen_image = '<img src="uploads/'.$data->test_name.'/'.$data->kitchen_image.'"  style="image-orientation: from-image !important;">';}

                    
                    $unit = '
                    <table border="1">
                    <tr><td>
                  <span style=" font-size: 11px; font-weight:bold;">
                        Condenser
                        </span><br>
                        <table border="0" style="font-size:10px;">
                            <tr>
                                <td width="100px">Manufacturer: </td>
                                <td width="160px"><b>'.$data->con_manufacturer.'</b></td>
                            </tr>
                            <tr>
                                <td width="100px">Model Number: </td>
                                <td width="160px"><b>'.$data->con_model.'</b></td>
                            </tr>

                            <tr>
                                <td>Serial Number: </td>
                                <td><b>'.$data->con_serial.'</b></td>
                            </tr>
                            <tr>
                                <td>BTU Input: </td>
                                <td><b>'.$data->con_btu_input.'</b></td>                                
                            </tr>

                            <tr>
                                <td>Toonage: </td>
                                <td><b>'.$data->con_tonnage.'</b></td>
                            </tr>
                            <tr>
                                <td>Seer: </td>
                                <td><b>'.$data->con_seer.'</b></td>
                            </tr>
                            <tr>
                            <td>Pounds: </td>
                            <td><b>'.$data->in_pounds.'</b></td>
                        </tr>
                         <tr>
                            <td>Ounces: </td>
                            <td><b>'.$data->in_ounces.'</b></td>
                            </tr>
                          
                        </table>
                        <br><br>
                        </td><td>
                        <span style=" font-size: 11px; font-weight:bold;">
                        Indoor Unit
                        </span><br>
                        <table border="0" style="font-size:10px;">
                            <tr>
                                <td width="100px">Manufacturer : </td>
                                <td width="160px"><b>'.$data->in_manufacturer.'</b></td>
                            </tr>
                            <tr>
                                <td width="100px">Model Number: </td>
                                <td width="160px"><b>'.$data->in_model.'</b></td>
                            </tr>

                            <tr>
                                <td>Serial Number: </td>
                                <td><b>'.$data->in_serial.'</b></td>
                            </tr>
                            <tr>
                                <td>BTU Input: </td>
                                <td><b>'.$data->in_btu_input.'</b></td>
                            </tr>

                             <tr>
                                <td>BTU Output: </td>
                                <td><b>'.$data->in_btu_output.'</b></td>
                            </tr>
                           
                            <tr>
                                <td>Full Title 24?: </td>
                                <td><b>'.$data->in_fulltime.'</b></td>                              
                            </tr>                          
                        </table>

                        </td>
                        </tr>
                        </table>

                        <br><br>
                        <span style=" font-size: 11px; font-weight:bold; ">
                        Notes
                        </span><br>
                        <table border="0" style="font-size:10px;">
                            <tr>
                                <td width="100px">Notes : </td>
                                <td width="400px"><b>'.$data->notes.'</b></td>                                
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

                  
                  $html = '<table border="0" >
                        <tr>
                        <td colspan="2" style="text-align: center;">
                        '.$header.'
                        </td>
                        </tr>
                        <table border="1" style="padding: 5px; margin:5px">
                            <tr>
                            
                            <td colspan="2" > <span style=" font-size: 13px; font-weight:bold; ">
                            Information
                            </span><br>
                            '.$basicInfo.'
                            </td>
                            </tr>
                        </table >
                        <br><br>

                       
                        <tr style="paddig: 0px !important; margin: 0px  !important; ">
                        <td colspan="2" style="padding: 0px  !important; margin: 0px  !important;" >
                        
                        '.$unit.'
                        </td>
                       
                        </tr>
                        


                        

                  </table>                 
                 ';


                  $pdf->writeHTML($html, true, false, true, false, '');                  
                  $pdf->Output($data->test_name.'.pdf', 'I');
                //   $LocationOnServer = 'C:\wamp64\www\projectname\uploads\invoices/\/';

                //  $LocationOnServer = 'https://softmaticsolution.com/cl/hers/uploads/';
                //   $FileNamePath = $_SERVER['DOCUMENT_ROOT'].$data->test_name.'.pdf';
                //   ob_clean();
                //   $pdf->Output($FileNamePath, 'F');

                //   if(!empty($FileNamePath)){
                //     $this->SendQuotation($FileNamePath);
                //     }
                //     else{
                //         print_r('Could not trace file path');
                //     } 

            }


        function SendQuotation($FileNamePath){

            $this->load->library("Phpmailer_library");

            $mail = $this->phpmailer_library->load();


            $mail->setFrom('info@softmaticsolution.com', 'Hers Test');
            $mail->addAddress('farazahmed34296@gmail.com', 'Joe User');     //Add a recipient
            
            $mail->addAttachment($FileNamePath); 


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here isasdasd the subject2';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This iasdasasds the body in plain text for non-HTML mail clients';
        
            if(!$mail->send()){
                echo 'Mail could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }else{
                echo 'Mail has been sent2';
            }
            
        }

            
         
           
         
      }
?>