<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Forms | Hers test</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/vendors/select2/select2.min.css">
  <link rel="stylesheet"
    href="<?php echo base_url(); ?>asset/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:<?php echo base_url(); ?>asset/partials/_navbar.html -->
    <?php include('header.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:<?php echo base_url(); ?>asset/partials/_settings-panel.html -->


      <!-- partial -->
      <!-- partial:<?php echo base_url(); ?>asset/partials/_sidebar.html -->
      <?php include('sidebar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">



                  <div class="row">
                    <div class="col-md-8">
                      <h4 class="card-title">HERS Test Update</h4>

                    </div>
                    <div class="col-4">
                    
                      <button type="button" class="btn btn-danger top-right-button float-right mr-1" data-toggle="modal"
                        data-target="#deleteModal">Delete</button>
                        <a href="<?php echo base_url();?>PdfReport/hersReport/<?php echo $fs->f_id;?>" target="_blank" class="btn btn-primary top-right-button float-right mr-1">Get PDF</a>

                    </div>
                  </div>




                  <!-- Modal -->

                  <div id="deleteModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-body text-center">
                          <form method="post" action="<?php echo base_url(); ?>Form/delete/<?php echo $fs->f_id; ?>">
                            <p>Are you Sure You want to Delete this item?</p>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-grey" data-dismiss="modal">Cancel</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>



                  <!-- Modal End -->
                  <?php
                  if( $this->session->flashdata('message_success') ) { ?>
                  <div class="row">
                    <div class="col-12 mt-4">
                      <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('message_success'); ?>
                      </div>
                    </div>
                  </div>
                  <?php }
                  ?>


                  <?php
                    if( $this->session->flashdata('message_error') ) { ?>
                  <div class="row">
                    <div class="col-12 mt-4">
                      <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('message_error'); ?>
                      </div>
                    </div>
                  </div>
                  <?php }
                  ?>


                  <form class="forms-sample" method="post"
                    action="<?php echo base_url();?>form/update_form/<?php echo $fs->f_id; ?>"
                    enctype="multipart/form-data">

                    <div class="row" id="initialForm">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Test Name*</label>
                          <input type="text" class="form-control" name="test_name" placeholder="Test Name"
                            value="<?php echo $fs->test_name; ?>" readonly>
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6" style="display: none;">
                        <div class="form-group">
                          <label>URL*</label>
                          <input type="text" class="form-control" name="url" placeholder="url " value="form/read">
                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Company Name*</label>
                          <input type="text" class="form-control" name="company_name" placeholder="Company Name"
                            value="<?php echo $fs->company_name; ?>">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Site Address*</label>
                          <input type="text" class="form-control" name="site_address" placeholder="Site Address"
                            value="<?php echo $fs->site_address; ?>">
                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-12">Duct Location*</label>

                          <div class="col-sm-11 offset-sm-1">
                            <div class="row">
                              <div class="form-check col-sm-3 ">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="duct_location" value="Crawl_Space"
                                    <?php echo ( $fs->duct_location == "Crawl_Space" ) ?  'Checked' :  ''; ?>>
                                  Crawl Space
                                </label>
                              </div>

                              <div class="form-check col-sm-3">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="duct_location" value="Attic"
                                    <?php echo ( $fs->duct_location == "Attic" ) ?  'Checked' :  ''; ?>>
                                  Attic
                                </label>
                              </div>

                              <div class="form-check col-sm-3">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="duct_location" value="Garage"
                                    <?php echo ( $fs->duct_location == "Garage" ) ?  'Checked' :  ''; ?>>
                                  Garage
                                </label>
                              </div>


                              <div class="form-check col-sm-3">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="duct_location" value="No_Ducts"
                                    <?php echo ( $fs->duct_location == "No_Ducts" ) ?  'Checked' :  ''; ?>>
                                  No Ducts
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Email*</label>
                          <input type="text" class="form-control" name="email" placeholder="Email"
                            value="<?php echo $fs->email; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Number of Bedrooms*</label>
                          <select class="form-control" name="number_of_bedroom">
                            <option value="Default">Default</option>
                            <option value="1" <?php echo (  $fs->number_of_bedroom  == '1') ?  'selected' :  ''; ?>>1
                            </option>
                            <option value="2" <?php echo (  $fs->number_of_bedroom  == '2') ?  'selected' :  ''; ?>>2
                            </option>
                            <option value="3" <?php echo (  $fs->number_of_bedroom  == '3') ?  'selected' :  ''; ?>>3
                            </option>
                            <option value="4" <?php echo (  $fs->number_of_bedroom  == '4') ?  'selected' :  ''; ?>>4
                            </option>
                            <option value="5" <?php echo (  $fs->number_of_bedroom  == '5') ?  'selected' :  ''; ?>>5
                            </option>
                            <option value="6" <?php echo (  $fs->number_of_bedroom  == '6') ?  'selected' :  ''; ?>>6
                            </option>
                            <option value="7" <?php echo (  $fs->number_of_bedroom  == '7') ?  'selected' :  ''; ?>>7
                            </option>
                            <option value="8" <?php echo (  $fs->number_of_bedroom  == '8') ?  'selected' :  ''; ?>>8
                            </option>
                          </select>
                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Unit Type*</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="unit_type" value="Package_Unit"
                                <?php echo ( $fs->unit_type == "Package_Unit" ) ?  'Checked' :  ''; ?>>
                              Package Unit
                            </label>
                          </div>

                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="unit_type" value="Central_Split_AC"
                                <?php echo ( $fs->unit_type == "Central_Split_AC" ) ?  'Checked' :  ''; ?>>
                              Central Split AC
                            </label>
                          </div>

                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="unit_type" value="Heat_Pump"
                                <?php echo ( $fs->unit_type == "Heat_Pump" ) ?  'Checked' :  ''; ?>>
                              Heat Pump
                            </label>
                          </div>

                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="unit_type" value="Ductless_Unit"
                                <?php echo ( $fs->unit_type == "Ductless_Unit" ) ?  'Checked' :  ''; ?>>
                              Ductless Unit
                            </label>
                          </div>

                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="initialSubmit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="initialClear()">Clear
                          Form</button>

                      </div>

                    </div>



                    <!-- Package Unit 1 (2) Start -->

                    <div class="row" id="packageUnit1">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Package Unit</h3>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Manufacturer *</label>
                          <input type="text" class="form-control" name="pu_manufacturer" placeholder="Manufacturer"
                            value="<?php echo $fs->pu_manufacturer; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Model Number *</label>
                          <input type="text" class="form-control" name="pu_model" placeholder="Model Number"
                            value="<?php echo $fs->pu_model; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Serial Number *</label>
                          <input type="text" class="form-control" name="pu_serial" placeholder="Serial Number"
                            value="<?php echo $fs->pu_serial; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BTU Input *</label>
                          <input type="text" class="form-control" name="pu_btu_input" placeholder="BTU Input"
                            value="<?php echo $fs->pu_btu_input; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BTU Output *</label>
                          <input type="text" class="form-control" name="pu_btu_output" placeholder="BTU Output"
                            value="<?php echo $fs->pu_btu_output; ?>">
                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Efficiency *</label>
                          <input type="text" class="form-control" name="pu_efficiency" placeholder="Efficiency"
                            value="<?php echo $fs->pu_efficiency; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tonnage *</label>
                          <select class="form-control" name="pu_tonnage">
                            <option value="Default"
                              <?php echo (  $fs->pu_tonnage  == 'Default') ?  'selected' :  ''; ?>>Default</option>
                            <option value="0.75" <?php echo (  $fs->pu_tonnage  == '0.75') ?  'selected' :  ''; ?>>0.75
                            </option>
                            <option value="1" <?php echo (  $fs->pu_tonnage  == '1') ?  'selected' :  ''; ?>>1</option>
                            <option value="1.5" <?php echo (  $fs->pu_tonnage  == '1.5') ?  'selected' :  ''; ?>>1.5
                            </option>
                            <option value="2" <?php echo (  $fs->pu_tonnage  == '2') ?  'selected' :  ''; ?>>2</option>
                            <option value="2.5" <?php echo (  $fs->pu_tonnage  == '2.5') ?  'selected' :  ''; ?>>2.5
                            </option>
                            <option value="3" <?php echo (  $fs->pu_tonnage  == '3') ?  'selected' :  ''; ?>>3</option>
                            <option value="3.5" <?php echo (  $fs->pu_tonnage  == '3.5') ?  'selected' :  ''; ?>>3.5
                            </option>
                            <option value="4" <?php echo (  $fs->pu_tonnage  == '4') ?  'selected' :  ''; ?>>4</option>
                            <option value="4.5" <?php echo (  $fs->pu_tonnage  == '4.5') ?  'selected' :  ''; ?>>4.5
                            </option>
                            <option value="5" <?php echo (  $fs->pu_tonnage  == '5') ?  'selected' :  ''; ?>>5</option>
                          </select>

                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Seers *</label>
                          <select class="form-control" name="pu_seer">
                            <option value="Default" <?php echo (  $fs->pu_seer  == 'Default') ?  'selected' :  ''; ?>>
                              Default</option>
                            <option value="14" <?php echo (  $fs->pu_seer  == '14') ?  'selected' :  ''; ?>>14</option>
                            <option value="15" <?php echo (  $fs->pu_seer  == '15') ?  'selected' :  ''; ?>>15</option>
                            <option value="16" <?php echo (  $fs->pu_seer  == '16') ?  'selected' :  ''; ?>>16</option>
                            <option value="17" <?php echo (  $fs->pu_seer  == '17') ?  'selected' :  ''; ?>>17</option>
                            <option value="18" <?php echo (  $fs->pu_seer  == '18') ?  'selected' :  ''; ?>>18</option>
                          </select>

                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-12">Full Title 24? *</label>
                          <div class="form-check col-sm-3 offset-sm-1">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="pu_fulltime" value="Yes"
                                <?php echo ( $fs->pu_fulltime == "Yes" ) ?  'Checked' :  ''; ?>>
                              Yes
                            </label>
                          </div>

                          <div class="form-check col-sm-3">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="pu_fulltime" value="No"
                                <?php echo ( $fs->pu_fulltime == "No" ) ?  'Checked' :  ''; ?>>
                              No
                            </label>
                          </div>
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="pu_upd_old_file"
                            value="<?php echo $fs->pu_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Package Unit</label>
                        <?php 
                      if($fs->pu_image != '') {

                          $str = $fs->pu_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="pu_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->

                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="packageUnit1_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="packageUnit1_Submit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="packageUnit1_Clear()">Clear
                          Form</button>

                      </div>

                    </div>



                    <!-- Package Unit 1 (2) End -->


                    <!-- Central Split AC (3) Start -->


                    <div class="row" id="centralSplit">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Central Split AC</h3>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Manufacturer *</label>
                          <input type="text" class="form-control" name="cs_manufacturer" placeholder="Manufacturer"
                            value="<?php echo $fs->cs_manufacturer; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Model Number *</label>
                          <input type="text" class="form-control" name="cs_model" placeholder="Model Number"
                            value="<?php echo $fs->cs_model; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Serial Number *</label>
                          <input type="text" class="form-control" name="cs_serial" placeholder="Serial Number"
                            value="<?php echo $fs->cs_serial; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tonnage *</label>
                          <select class="form-control" name="cs_tonnage">
                            <option value="Default"
                              <?php echo (  $fs->cs_tonnage  == 'Default') ?  'selected' :  ''; ?>>Default</option>
                            <option value="0.75" <?php echo (  $fs->cs_tonnage  == '0.75') ?  'selected' :  ''; ?>>0.75
                            </option>
                            <option value="1" <?php echo (  $fs->cs_tonnage  == '1') ?  'selected' :  ''; ?>>1</option>
                            <option value="1.5" <?php echo (  $fs->cs_tonnage  == '1.5') ?  'selected' :  ''; ?>>1.5
                            </option>
                            <option value="2" <?php echo (  $fs->cs_tonnage  == '2') ?  'selected' :  ''; ?>>2</option>
                            <option value="2.5" <?php echo (  $fs->cs_tonnage  == '2.5') ?  'selected' :  ''; ?>>2.5
                            </option>
                            <option value="3" <?php echo (  $fs->cs_tonnage  == '3') ?  'selected' :  ''; ?>>3</option>
                            <option value="3.5" <?php echo (  $fs->cs_tonnage  == '3.5') ?  'selected' :  ''; ?>>3.5
                            </option>
                            <option value="4" <?php echo (  $fs->cs_tonnage  == '4') ?  'selected' :  ''; ?>>4</option>
                            <option value="4.5" <?php echo (  $fs->cs_tonnage  == '4.5') ?  'selected' :  ''; ?>>4.5
                            </option>
                            <option value="5" <?php echo (  $fs->cs_tonnage  == '5') ?  'selected' :  ''; ?>>5</option>
                          </select>

                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Seers *</label>
                          <select class="form-control" name="cs_seer">
                            <option value="Default" <?php echo (  $fs->cs_seer  == 'Default') ?  'selected' :  ''; ?>>
                              Default</option>
                            <option value="14" <?php echo (  $fs->cs_seer  == '14') ?  'selected' :  ''; ?>>14</option>
                            <option value="15" <?php echo (  $fs->cs_seer  == '15') ?  'selected' :  ''; ?>>15</option>
                            <option value="16" <?php echo (  $fs->cs_seer  == '16') ?  'selected' :  ''; ?>>16</option>
                            <option value="17" <?php echo (  $fs->cs_seer  == '17') ?  'selected' :  ''; ?>>17</option>
                            <option value="18" <?php echo (  $fs->cs_seer  == '18') ?  'selected' :  ''; ?>>18</option>
                          </select>

                        </div>
                      </div><!-- col-md-6 End-->




                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="cs_upd_old_file"
                            value="<?php echo $fs->cs_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Central Split AC Image</label>
                        <?php 
                      if($fs->cs_image != '') {

                          $str = $fs->cs_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="cs_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="centralSplit_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="centralSplit_Submit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="centralSplit_Clear()">Clear
                          Form</button>

                      </div>

                    </div>


                    <!-- Central Split AC (3) End -->


                    <!-- Heat Pump (4) Start -->


                    <div class="row" id="heatPump">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Heat Pump</h3>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Manufacturer *</label>
                          <input type="text" class="form-control" name="heat_manufacturer" placeholder="Manufacturer"
                            value="<?php echo $fs->heat_manufacturer; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Model Number *</label>
                          <input type="text" class="form-control" name="heat_model" placeholder="Model Number"
                            value="<?php echo $fs->heat_model; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Serial Number *</label>
                          <input type="text" class="form-control" name="heat_serial" placeholder="Serial Number"
                            value="<?php echo $fs->heat_serial; ?>">
                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tonnage *</label>
                          <select class="form-control" name="heat_tonnage">
                            <option value="Default"
                              <?php echo (  $fs->heat_tonnage  == 'Default') ?  'selected' :  ''; ?>>Default</option>
                            <option value="0.75" <?php echo (  $fs->heat_tonnage  == '0.75') ?  'selected' :  ''; ?>>
                              0.75</option>
                            <option value="1" <?php echo (  $fs->heat_tonnage  == '1') ?  'selected' :  ''; ?>>1
                            </option>
                            <option value="1.5" <?php echo (  $fs->heat_tonnage  == '1.5') ?  'selected' :  ''; ?>>1.5
                            </option>
                            <option value="2" <?php echo (  $fs->heat_tonnage  == '2') ?  'selected' :  ''; ?>>2
                            </option>
                            <option value="2.5" <?php echo (  $fs->heat_tonnage  == '2.5') ?  'selected' :  ''; ?>>2.5
                            </option>
                            <option value="3" <?php echo (  $fs->heat_tonnage  == '3') ?  'selected' :  ''; ?>>3
                            </option>
                            <option value="3.5" <?php echo (  $fs->heat_tonnage  == '3.5') ?  'selected' :  ''; ?>>3.5
                            </option>
                            <option value="4" <?php echo (  $fs->heat_tonnage  == '4') ?  'selected' :  ''; ?>>4
                            </option>
                            <option value="4.5" <?php echo (  $fs->heat_tonnage  == '4.5') ?  'selected' :  ''; ?>>4.5
                            </option>
                            <option value="5" <?php echo (  $fs->heat_tonnage  == '5') ?  'selected' :  ''; ?>>5
                            </option>
                          </select>

                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Seers *</label>
                          <select class="form-control" name="heat_seer">
                            <option value="Default" <?php echo (  $fs->heat_seer  == 'Default') ?  'selected' :  ''; ?>>
                              Default</option>
                            <option value="14" <?php echo (  $fs->heat_seer  == '14') ?  'selected' :  ''; ?>>14
                            </option>
                            <option value="15" <?php echo (  $fs->heat_seer  == '15') ?  'selected' :  ''; ?>>15
                            </option>
                            <option value="16" <?php echo (  $fs->heat_seer  == '16') ?  'selected' :  ''; ?>>16
                            </option>
                            <option value="17" <?php echo (  $fs->heat_seer  == '17') ?  'selected' :  ''; ?>>17
                            </option>
                            <option value="18" <?php echo (  $fs->heat_seer  == '18') ?  'selected' :  ''; ?>>18
                            </option>
                          </select>

                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="heat_upd_old_file"
                            value="<?php echo $fs->heat_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Heat Pump Image</label>
                        <?php 
                      if($fs->heat_image != '') {

                          $str = $fs->heat_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="heat_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->


                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="heatPump_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="heatPump_Submit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="heatPump_Clear()">Clear
                          Form</button>

                      </div>

                    </div>


                    <!-- Heat Pump (4) End -->



                    <!-- Central Gas Furnace (5) Start -->

                    <div class="row" id="centralGas">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Central Gas Furnace</h3>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Manufacturer *</label>
                          <input type="text" class="form-control" name="cg_manufacturer" placeholder="Manufacturer"
                            value="<?php echo $fs->cg_manufacturer; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Model Number *</label>
                          <input type="text" class="form-control" name="cg_model" placeholder="Model Number"
                            value="<?php echo $fs->cg_model; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Serial Number *</label>
                          <input type="text" class="form-control" name="cg_serial" placeholder="Serial Number"
                            value="<?php echo $fs->cg_serial; ?>">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BTU Input *</label>
                          <input type="text" class="form-control" name="cg_btu_input" placeholder="BTU Input"
                            value="<?php echo $fs->cg_btu_input; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BTU Output *</label>
                          <input type="text" class="form-control" name="cg_btu_output" placeholder="BTU Output"
                            value="<?php echo $fs->cg_btu_output; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Efficiency *</label>
                          <input type="text" class="form-control" name="cg_efficiency" placeholder="Efficiency"
                            value="<?php echo $fs->cg_efficiency; ?>">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-12">Full Title 24? *</label>
                          <div class="form-check col-sm-3 offset-sm-1">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="cg_fulltime" value="Yes"
                                <?php echo ( $fs->cg_fulltime == "Yes" ) ?  'Checked' :  ''; ?>>
                              Yes
                            </label>
                          </div>

                          <div class="form-check col-sm-3">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="cg_fulltime" value="No"
                                <?php echo ( $fs->cg_fulltime == "No" ) ?  'Checked' :  ''; ?>>
                              No
                            </label>
                          </div>
                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="cg_upd_old_file"
                            value="<?php echo $fs->cg_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Central Gas Furnace Image</label>
                        <?php 
                      if($fs->cg_image != '') {

                          $str = $fs->cg_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="cg_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->

                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="centralGas_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="centralGas_Submit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="centralGas_Clear()">Clear
                          Form</button>

                      </div>

                    </div>

                    <!-- Central Gas Furnace (5) End -->



                    <!-- AC Coil (6) Start -->

                    <div class="row" id="acCoil">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>AC Coil</h3>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Manufacturer *</label>
                          <input type="text" class="form-control" name="acc_manufacturer" placeholder="Manufacturer"
                            value="<?php echo $fs->acc_manufacturer; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Model Number *</label>
                          <input type="text" class="form-control" name="acc_model" placeholder="Model Number"
                            value="<?php echo $fs->acc_model; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Serial Number *</label>
                          <input type="text" class="form-control" name="acc_serial" placeholder="Serial Number"
                            value="<?php echo $fs->acc_serial; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="acc_upd_old_file"
                            value="<?php echo $fs->acc_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>AC Coil Image</label>
                        <?php 
                      if($fs->acc_image != '') {

                          $str = $fs->acc_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="acc_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->


                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="acCoil_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="acCoil_Submit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="acCoil_Clear()">Clear
                          Form</button>

                      </div>

                    </div>

                    <!-- AC Coil (6) End -->




                    <!-- Air Handler (7) Start -->

                    <div class="row" id="airHandler">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Air Handler</h3>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Manufacturer *</label>
                          <input type="text" class="form-control" name="air_manufacturer" placeholder="Manufacturer"
                            value="<?php echo $fs->air_manufacturer; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Model Number *</label>
                          <input type="text" class="form-control" name="air_model" placeholder="Model Number"
                            value="<?php echo $fs->air_model; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Serial Number *</label>
                          <input type="text" class="form-control" name="air_serial" placeholder="Serial Number"
                            value="<?php echo $fs->air_serial; ?>">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BTU Input *</label>
                          <input type="text" class="form-control" name="air_btu_input" placeholder="BTU Input"
                            value="<?php echo $fs->air_btu_input; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BTU Output *</label>
                          <input type="text" class="form-control" name="air_btu_output" placeholder="BTU Output"
                            value="<?php echo $fs->air_btu_output; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Efficiency *</label>
                          <input type="text" class="form-control" name="air_efficiency" placeholder="Efficiency"
                            value="<?php echo $fs->air_efficiency; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-12">Full Title 24? *</label>
                          <div class="form-check col-sm-3 offset-sm-1">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="air_fulltime" value="Yes"
                                <?php echo ( $fs->air_fulltime == "Yes" ) ?  'Checked' :  ''; ?>>
                              Yes
                            </label>
                          </div>

                          <div class="form-check col-sm-3">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="air_fulltime" value="No"
                                <?php echo ( $fs->air_fulltime == "No" ) ?  'Checked' :  ''; ?>>
                              No
                            </label>
                          </div>
                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="air_upd_old_file"
                            value="<?php echo $fs->air_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Central Air Handler Image</label>
                        <?php 
                      if($fs->air_image != '') {

                          $str = $fs->air_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="air_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="airHandler_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="airHandler_Submit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="airHandler_Clear()">Clear
                          Form</button>

                      </div>

                    </div>

                    <!-- Central Air Handler (7) End -->

                    <!--Condenser (8) Start -->

                    <div class="row" id="condenser">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Condenser</h3>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Manufacturer *</label>
                          <input type="text" class="form-control" name="con_manufacturer" placeholder="Manufacturer"
                            value="<?php echo $fs->con_manufacturer; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Model Number *</label>
                          <input type="text" class="form-control" name="con_model" placeholder="Model Number"
                            value="<?php echo $fs->con_model; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Serial Number *</label>
                          <input type="text" class="form-control" name="con_serial" placeholder="Serial Number"
                            value="<?php echo $fs->con_serial; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BTU Input *</label>
                          <input type="text" class="form-control" name="con_btu_input" placeholder="BTU Input"
                            value="<?php echo $fs->con_btu_input; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tonnage *</label>
                          <select class="form-control" name="con_tonnage">
                            <option value="Default"
                              <?php echo (  $fs->con_tonnage  == 'Default') ?  'selected' :  ''; ?>>Default</option>
                            <option value="0.75" <?php echo (  $fs->con_tonnage  == '0.75') ?  'selected' :  ''; ?>>0.75
                            </option>
                            <option value="1" <?php echo (  $fs->con_tonnage  == '1') ?  'selected' :  ''; ?>>1</option>
                            <option value="1.5" <?php echo (  $fs->con_tonnage  == '1.5') ?  'selected' :  ''; ?>>1.5
                            </option>
                            <option value="2" <?php echo (  $fs->con_tonnage  == '2') ?  'selected' :  ''; ?>>2</option>
                            <option value="2.5" <?php echo (  $fs->con_tonnage  == '2.5') ?  'selected' :  ''; ?>>2.5
                            </option>
                            <option value="3" <?php echo (  $fs->con_tonnage  == '3') ?  'selected' :  ''; ?>>3</option>
                            <option value="3.5" <?php echo (  $fs->con_tonnage  == '3.5') ?  'selected' :  ''; ?>>3.5
                            </option>
                            <option value="4" <?php echo (  $fs->con_tonnage  == '4') ?  'selected' :  ''; ?>>4</option>
                            <option value="4.5" <?php echo (  $fs->con_tonnage  == '4.5') ?  'selected' :  ''; ?>>4.5
                            </option>
                            <option value="5" <?php echo (  $fs->con_tonnage  == '5') ?  'selected' :  ''; ?>>5</option>
                          </select>

                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Seers *</label>
                          <select class="form-control" name="con_seer">
                            <option value="Default" <?php echo (  $fs->con_seer  == 'Default') ?  'selected' :  ''; ?>>
                              Default</option>
                            <option value="14" <?php echo (  $fs->con_seer  == '14') ?  'selected' :  ''; ?>>14</option>
                            <option value="15" <?php echo (  $fs->con_seer  == '15') ?  'selected' :  ''; ?>>15</option>
                            <option value="16" <?php echo (  $fs->con_seer  == '16') ?  'selected' :  ''; ?>>16</option>
                            <option value="17" <?php echo (  $fs->con_seer  == '17') ?  'selected' :  ''; ?>>17</option>
                            <option value="18" <?php echo (  $fs->con_seer  == '18') ?  'selected' :  ''; ?>>18</option>
                          </select>

                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Pounds *</label>
                          <input type="text" class="form-control" name="in_pounds" placeholder="Pounds"
                            value="<?php echo $fs->in_pounds; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Ounces *</label>
                          <input type="text" class="form-control" name="in_ounces" placeholder="BTU Ounces"
                            value="<?php echo $fs->in_ounces; ?>">
                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="con_upd_old_file"
                            value="<?php echo $fs->con_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Condenser Image</label>
                        <?php 
                      if($fs->con_image != '') {

                          $str = $fs->con_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="con_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="condenser_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="condenser_Submit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="condenser_Clear()">Clear
                          Form</button>

                      </div>

                    </div>



                    <!-- Condenser (8) End -->


                    <!--Indoor Unit (9) Start -->

                    <div class="row" id="indoorUnit">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Indoor Unit</h3>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Manufacturer *</label>
                          <input type="text" class="form-control" name="in_manufacturer" placeholder="Manufacturer"
                            value="<?php echo $fs->in_manufacturer; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Model Number *</label>
                          <input type="text" class="form-control" name="in_model" placeholder="Model Number"
                            value="<?php echo $fs->in_model; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Serial Number *</label>
                          <input type="text" class="form-control" name="in_serial" placeholder="Serial Number"
                            value="<?php echo $fs->in_serial; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BTU Input *</label>
                          <input type="text" class="form-control" name="in_btu_input" placeholder="BTU Input"
                            value="<?php echo $fs->in_btu_input; ?>">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BTU Output *</label>
                          <input type="text" class="form-control" name="in_btu_output" placeholder="BTU Output"
                            value="<?php echo $fs->in_btu_output; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      


                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-12">Full Title 24? *</label>
                          <div class="form-check col-sm-3 offset-sm-1">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="in_fulltime" value="Yes"
                                <?php echo ( $fs->in_fulltime == "Yes" ) ?  'Checked' :  ''; ?>>
                              Yes
                            </label>
                          </div>

                          <div class="form-check col-sm-3">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="in_fulltime" value="No"
                                <?php echo ( $fs->in_fulltime == "No" ) ?  'Checked' :  ''; ?>>
                              No
                            </label>
                          </div>
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="in_upd_old_file"
                            value="<?php echo $fs->in_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Indoor Unit Image</label>
                        <?php 
                      if($fs->in_image != '') {

                          $str = $fs->in_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="in_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="indoorUnit_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="indoorUnit_Submit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="indoorUnit_Clear()">Clear
                          Form</button>

                      </div>

                    </div>



                    <!-- Indoor Unit (9) End -->


                    <!-- Test Result 10 Start -->

                    <div class="row" id="testResult">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Test Result</h3>
                        </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Duct Leakage CFM Result</label>
                          <input type="text" class="form-control" name="test_duct_leak_result"
                            placeholder="Duct Leakage CFM Result" value="<?php echo $fs->test_duct_leak_result; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Duct Leakage CFM *</label>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="test_ductLeakage" value="5%"
                                    <?php echo ( $fs->test_ductLeakage == "5%" ) ?  'Checked' :  ''; ?>>
                                  5%
                                </label>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="test_ductLeakage"
                                    value="15%_Partial"
                                    <?php echo ( $fs->test_ductLeakage == "15%_Partial" ) ?  'Checked' :  ''; ?>>
                                  15% (Partial)
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="test_ductLeakage"
                                    value="15%_System"
                                    <?php echo ( $fs->test_ductLeakage == "15%_System" ) ?  'Checked' :  ''; ?>>
                                  15% (System only)
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="test_ductLeakage"
                                    value="Exempt_Asbestos"
                                    <?php echo ( $fs->test_ductLeakage == "Exempt_Asbestos" ) ?  'Checked' :  ''; ?>>
                                  Exempt (Asbestos)
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="test_ductLeakage"
                                    value="Exempt_40ft"
                                    <?php echo ( $fs->test_ductLeakage == "Exempt_40ft" ) ?  'Checked' :  ''; ?>>
                                  Exempt (Less than 40ft of ducts)
                                </label>
                              </div>
                            </div>
                          </div>



                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Fan Watt Draw (New System Only)</label>
                          <input type="text" class="form-control" name="test_fanWatt" placeholder="Fan Watt Draw"
                            value="<?php echo $fs->test_fanWatt; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <h5>Airflow CFM Result</h5>
                          <label>CFM (Return 1) </label>
                          <input type="text" class="form-control" name="test_cfm1" placeholder="CFM (Return 1)"
                            value="<?php echo $fs->test_cfm1; ?>">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Location (Return 1) </label>
                          <input type="text" class="form-control" name="test_location1"
                            placeholder="Location (Return 1)" value="<?php echo $fs->test_location1; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>CFM (Return 2)</label>
                          <input type="text" class="form-control" name="test_cfm2" placeholder="CFM (Return 2)"
                            value="<?php echo $fs->test_cfm2; ?>">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Location (Return 2)</label>
                          <input type="text" class="form-control" name="test_location2"
                            placeholder="Location (Return 2)" value="<?php echo $fs->test_location2; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>CFM (Return 3)</label>
                          <input type="text" class="form-control" name="test_cfm3" placeholder="CFM (Return 3)"
                            value="<?php echo $fs->test_cfm3; ?>">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Location (Return 3)</label>
                          <input type="text" class="form-control" name="test_location3"
                            placeholder="Location (Return 3)" value="<?php echo $fs->test_location3; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>CFM (Return 4)</label>
                          <input type="text" class="form-control" name="test_cfm4" placeholder="CFM (Return 4)"
                            value="<?php echo $fs->test_cfm4; ?>">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Location (Return 4)</label>
                          <input type="text" class="form-control" name="test_location4"
                            placeholder="Location (Return 4)" value="<?php echo $fs->test_location4; ?>">
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>CFM (Return 5)</label>
                          <input type="text" class="form-control" name="test_cfm5" placeholder="CFM (Return 5)"
                            value="<?php echo $fs->test_cfm5; ?>">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Location (Return 5)</label>
                          <input type="text" class="form-control" name="test_location5"
                            placeholder="Location (Return 5)" value="<?php echo $fs->test_location5; ?>">
                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="testResult_Back()">Back</button>

                        <button type="button" class="btn btn-primary mr-2" onclick="testResultSubmit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="testResult_Clear()">Clear
                          Form</button>

                      </div>



                    </div>

                    <!-- Test Result 10 End -->



                    <!-- Refrigerant (MCH 25) 10.1 Start -->

                    <div class="row" id="refrigerant">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Refrigerant (MCH 25)</h3>
                        </div>
                      </div>



                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="ref_upd_old_file"
                            value="<?php echo $fs->ref_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Refrigerant (MCH 25) Image</label>
                        <?php 
                      if($fs->ref_image != '') {

                          $str = $fs->ref_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="ref_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->

                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="refrigerant_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="refrigerantSubmit()">Next</button>
                      </div>

                    </div>
                    <!-- Refrigerant (MCH 25) 10.1 End -->



                    <!-- Windows 10.2 Start -->

                    <div class="row" id="windows">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Windows</h3>
                        </div>
                      </div>


                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="win_upd_old_file"
                            value="<?php echo $fs->win_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Windows Image</label>
                        <?php 
                      if($fs->win_image != '') {

                          $str = $fs->win_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="win_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->

                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="window_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="windowSubmit()">Next</button>
                      </div>

                    </div>
                    <!-- Windows 10.2 End -->



                    <!-- Water Heater 10.3 Start -->

                    <div class="row" id="water_heater">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Water Heater</h3>
                        </div>
                      </div>



                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="water_upd_old_file"
                            value="<?php echo $fs->water_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Water Heater Image</label>
                        <?php 
                      if($fs->water_image != '') {

                          $str = $fs->water_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="water_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->

                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="water_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="waterSubmit()">Next</button>
                      </div>

                    </div>
                    <!-- Water Heater 10.3 End -->


                    <!-- Kitchen Hood 10.4 Start -->

                    <div class="row" id="kitchen">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3>Kitchen Hood</h3>
                        </div>
                      </div>


                      <div class="col-md-12">
                        <div class="form-group" style="display:none">
                          <label>Old File</label>
                          <input type="text" class="form-control" name="kitchen_upd_old_file"
                            value="<?php echo $fs->kitchen_image; ?>">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <label>Kitchen Hood Image</label>
                        <?php 
                      if($fs->kitchen_image != '') {

                          $str = $fs->kitchen_image;
                          $tmpArr = explode(",",$str);
                          $attachCount = 0; 

                          foreach($tmpArr as $f){
                              $f= str_replace(" ","_",$f);
                              ?>

                        <div id="attach<?php $attachCount++; echo $attachCount; ?>"><u> <i
                              class="simple-icon-paper-clip"></i> <a
                              href="<?php echo $this->config->item('upload_dir')."/".$fs->test_name. "/".$f; ?>"
                              target="_blank"><?php echo $f ?></a></u> &nbsp;&nbsp;&nbsp;&nbsp; <br /><br /></div>


                        <?php
                                            }


                                           
                                        } else { ?> No file(s) attached. <?php }
                                    ?>

                        <div class="form-group">
                          <label>Image reupload</label>
                          <input type="file" name="kitchen_image[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                              placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

                      </div><!-- col-md-6 End-->

                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="kitchen_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="kitchenSubmit()">Next</button>
                      </div>

                    </div>
                    <!-- Kitchen Hood 10.4 End -->


                    <!-- Notes 11 Start -->

                    <div class="row" id="notes">
                      <div class="col-md-12">
                        <div class="headingForm">
                          <h3> Notes </h3>
                        </div>
                      </div>


                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Notes</label>
                          <input type="text" class="form-control" name="notes" placeholder="Notes"
                            value="<?php echo $fs->notes; ?>">
                        </div>
                      </div><!-- col-md-6 End-->



                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="notes_Back()">Back</button>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="button" class="btn btn-light float-right" onclick="notes_Clear()">Clear
                          Form</button>

                      </div>


                    </div>
                    <!-- Notes 11 End -->



                  </form>


                </div>
              </div>
            </div>



          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:<?php echo base_url(); ?>asset/partials/_footer.html -->
        <?php include('footer.php');?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <div></div>
  <script src="<?php echo base_url(); ?>asset/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url(); ?>asset/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>asset/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/template.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>asset/js/file-upload.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/typeahead.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/select2.js"></script>
  <!-- End custom js for this page-->


  
  <script>


    
    unit_type = "";
    hideAll()
    function hideAll() {
      $("#packageUnit1").hide();
      $("#centralSplit").hide();
      $("#heatPump").hide();
      $("#centralGas").hide();
      $("#acCoil").hide();
      $("#airHandler").hide();
      $("#condenser").hide();
      $("#indoorUnit").hide();
      $("#testResult").hide();
      $("#refrigerant").hide();
      $("#windows").hide();
      $("#water_heater").hide();
      $("#kitchen").hide();
      $("#notes").hide();
      // $("#initialForm").hide();

    }
    //First Initial Form
    function initialSubmit() {
      $("#initialForm").hide();

      unit_type = $("input[name=unit_type]:checked").val();
      localStorage.setItem('unit_type', unit_type);

      allow = true;
      $("input[name=test_name]").val() == '' ? allow = false : nothing = true;
      $("input[name=company_name]").val() == '' ? allow = false : nothing = true;
      $("input[name=site_address]").val() == '' ? allow = false : nothing = true;
      $("input[name=duct_location]").is(":checked") ? nothing = true : allow = false;
      $("input[name=email]").val() == '' ? allow = false : nothing = true;
      $("select[name=number_of_bedroom] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("input[name=unit_type]").is(":checked") ? nothing = true : allow = false;

      if (unit_type == "Package_Unit" && allow) {
        $("#packageUnit1").show();
        $("#hersTitle").append(" > Package Unit");

      } else if (unit_type == "Central_Split_AC" && allow) {
        // $("#centralSplit").show();
        // $("#hersTitle").append(" > Central Split AC");

        $("#centralGas").show();
        $("#hersTitle").append(" > Central Gas Furnace");
        

      } else if (unit_type == "Heat_Pump" && allow) {
        // $("#heatPump").show();
        // $("#hersTitle").append(" > Heat Pump");

        $("#airHandler").show();
        $("#hersTitle").append(" > Air Handler");

      } else if (unit_type == "Ductless_Unit" && allow) {
        // $("#condenser").show();
        // $("#hersTitle").append(" > Condenser");
        $("#indoorUnit").show();
        $("#hersTitle").append(" > Indoor Unit");

      } else {
        alert("Kindly fill all the fields");
        $("#initialForm").show();
      }

    }


    // (2)
    function packageUnit1_Submit() {
      allow = true;


      fulltime = $("input[name=pu_fulltime]:checked").val();
      localStorage.setItem('fulltime', fulltime);

      $("input[name=pu_fulltime]").is(":checked") ? nothing = true : allow = false;
      $("input[name=pu_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=pu_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=pu_serial]").val() == '' ? allow = false : nothing = true;
      $("input[name=pu_btu_input]").val() == '' ? allow = false : nothing = true;
      $("input[name=pu_btu_output]").val() == '' ? allow = false : nothing = true;
      $("input[name=pu_efficiency]").val() == '' ? allow = false : nothing = true;
      $("select[name=pu_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("select[name=pu_seer] option:selected").val() == "Default" ? allow = false : nothing = true;

      if (allow) {
        $("#packageUnit1").hide();
        $("#testResult").show();
        $("#hersTitle").append(" > Test Result");
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function packageUnit1_Back() {
      $("#packageUnit1").hide();
      $("#initialForm").show();
      oneBack();
    }

    // (3)
    function centralSplit_Submit() {
      allow = true;

      fulltime = localStorage.getItem('fulltime');

      $("input[name=cs_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=cs_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=cs_serial]").val() == '' ? allow = false : nothing = true;
      $("select[name=cs_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("select[name=cs_seer] option:selected").val() == "Default" ? allow = false : nothing = true;


      if (allow) {
        $("#centralSplit").hide();
        if (fulltime == 'Yes') {
          $("#acCoil").show();
          $("#hersTitle").append(" > acCoil");
        } else {
          $("#testResult").show();
          $("#hersTitle").append(" > Test Result");
        }

        // $("#centralGas").show();
        // $("#hersTitle").append(" > Central Gas Furnace");
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function centralSplit_Back() {
      $("#centralSplit").hide();
      // $("#initialForm").show();
      $("#centralGas").show();
      oneBack();
    }



    // (4)
    function heatPump_Submit() {
      allow = true;


      fulltime = localStorage.getItem('fulltime');

      $("input[name=heat_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=heat_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=heat_serial]").val() == '' ? allow = false : nothing = true;
      $("select[name=heat_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("select[name=heat_seer] option:selected").val() == "Default" ? allow = false : nothing = true;


      if (allow) {
        $("#heatPump").hide();

        // $("#testResult").show();
        // $("#hersTitle").append(" > Test Result");

        if (fulltime == 'Yes') {
          $("#acCoil").show();
          $("#hersTitle").append(" > acCoil");
        } else {
          $("#testResult").show();
          $("#hersTitle").append(" > Test Result");
        }


        // $("#airHandler").show();
        // $("#hersTitle").append(" > Air Handler");
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function heatPump_Back() {
      $("#heatPump").hide();
      // $("#initialForm").show();
      $("#airHandler").show();
      
      oneBack();
    }


    // (5)
    function centralGas_Submit() {
      allow = true;

      fulltime = $("input[name=cg_fulltime]:checked").val();
      localStorage.setItem('fulltime', fulltime);




      $("input[name=cg_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_serial]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_btu_input]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_btu_output]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_efficiency]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_fulltime]").is(":checked") ? nothing = true : allow = false;

      if (allow) {
        $("#centralGas").hide();

        $("#centralSplit").show();
        $("#hersTitle").append(" > Central Split AC");


        // if (fulltime == 'Yes') {
        //   $("#acCoil").show();
        //   $("#hersTitle").append(" > acCoil");
        // } else {
        //   $("#testResult").show();
        //   $("#hersTitle").append(" > Test Result");
        // }
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function centralGas_Back() {
      $("#centralGas").hide();
      // $("#centralSplit").show();
      // oneBack();
      $("#initialForm").show();      
      oneBack();
    }

    // (6)
    function acCoil_Submit() {
      allow = true;

      $("input[name=acc_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=acc_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=acc_serial]").val() == '' ? allow = false : nothing = true;

      if (allow) {
        $("#acCoil").hide();
        $("#testResult").show();
        $("#hersTitle").append(" > Test Result");
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function acCoil_Back() {
      $("#acCoil").hide();
      
      $("#centralSplit").show();
      // $("#centralGas").show();
      oneBack();
    }



    // (7)
    function airHandler_Submit() {
      allow = true;


      fulltime = $("input[name=air_fulltime]:checked").val();
      localStorage.setItem('fulltime', fulltime);

      $("input[name=air_fulltime]").is(":checked") ? nothing = true : allow = false;
      $("input[name=air_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=air_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=air_serial]").val() == '' ? allow = false : nothing = true;
      $("input[name=air_btu_input]").val() == '' ? allow = false : nothing = true;
      $("input[name=air_btu_output]").val() == '' ? allow = false : nothing = true;
      $("input[name=air_efficiency]").val() == '' ? allow = false : nothing = true;

      if (allow) {
        $("#airHandler").hide();
        // $("#testResult").show();
        // $("#hersTitle").append(" > Test Result");

        $("#heatPump").show();
        $("#hersTitle").append(" > Heat Pump");
        

      } else {
        alert("Kindly fill all the fields");
      }
    }

    function airHandler_Back() {
      $("#airHandler").hide();

      $("#initialForm").show();
      // $("#heatPump").show();
      oneBack();
    }


    // (8)
    function condenser_Submit() {
      allow = true;

      fulltime = localStorage.getItem('fulltime');
      $("input[name=con_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=con_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=con_serial]").val() == '' ? allow = false : nothing = true;
      $("input[name=con_btu_input]").val() == '' ? allow = false : nothing = true;
      $("select[name=con_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("select[name=con_seer] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("input[name=in_pounds]").val() == '' ? allow = false : nothing = true;
      $("input[name=in_ounces]").val() == '' ? allow = false : nothing = true;


      if (allow) {

        if (fulltime == "Yes") {
          $("#condenser").hide();
          $("#windows").show();
          $("#hersTitle").append(" > Windows");

        }else{
          $("#condenser").hide();
          // $("#notes").show();
          // $("#hersTitle").append(" > Notes");
          $("#notes").show();
          $("#hersTitle").append(" > Notes");

        }


        // $("#condenser").hide();
        // // $("#indoorUnit").show();
        // // $("#hersTitle").append(" > Indoor Unit");
        // $("#notes").show();
        // $("#hersTitle").append(" > Notes");
        
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function condenser_Back() {

      $("#condenser").hide();
      $("#indoorUnit").show();
      // $("#initialForm").show();
      oneBack();
    }

    // (9)
    function indoorUnit_Submit() {
      allow = true;

      fulltime = $("input[name=in_fulltime]:checked").val();
      localStorage.setItem('fulltime', fulltime);

      $("input[name=in_fulltime]").is(":checked") ? nothing = true : allow = false;


      $("input[name=in_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=in_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=in_serial]").val() == '' ? allow = false : nothing = true;
      $("input[name=in_btu_input]").val() == '' ? allow = false : nothing = true;
      $("input[name=in_btu_output]").val() == '' ? allow = false : nothing = true;


      


      if (allow) {

        // if (fulltime == "Yes") {
        //   $("#indoorUnit").hide();
        //   $("#windows").show();
        //   $("#hersTitle").append(" > Windows");

        // }else{
        //   $("#indoorUnit").hide();
        //   // $("#notes").show();
        //   // $("#hersTitle").append(" > Notes");
        //   $("#condenser").show();
        //   $("#hersTitle").append(" > Condenser");

        // }

        $("#indoorUnit").hide();
        // $("#notes").show();
        // $("#hersTitle").append(" > Notes");
        $("#condenser").show();
        $("#hersTitle").append(" > Condenser");
       
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function indoorUnit_Back() {
      $("#indoorUnit").hide();
      // $("#condenser").show();
      $("#initialForm").show();
      oneBack();
    }



    // (10)
    function testResultSubmit() {
      allow = true;
      unit_type = localStorage.getItem('unit_type');
      fulltime = localStorage.getItem('fulltime');

      $("input[name=test_ductLeakage]").is(":checked") ? nothing = true : allow = false;


      if (unit_type == "Package_Unit" && allow) {

        if (fulltime == "Yes") {
          $("#testResult").hide();
          $("#windows").show();
          $("#hersTitle").append(" > Windows");

        } else {
          $("#testResult").hide();
          $("#notes").show();
          $("#hersTitle").append(" > Notes");
        }




      } else if (unit_type == "Central_Split_AC" && allow) {
        $("#testResult").hide();
        // $("#notes").show(); 
        $("#refrigerant").show();
        $("#hersTitle").append(" > Refrigerant");
        //$("#hersTitle").append(" > Notes");

      } else if (unit_type == "Heat_Pump" && allow) {
        $("#testResult").hide();
        // $("#notes").show(); 
        $("#refrigerant").show();
        $("#hersTitle").append(" > Refrigerant");
        // $("#hersTitle").append(" > Notes");

      } else if (unit_type == "Ductless_Unit" && allow) {

      }

    }

    function testResult_Back() {
      unit_type = localStorage.getItem('unit_type');
      fulltime = localStorage.getItem('fulltime');
      if (unit_type == "Package_Unit") {
        $("#packageUnit1").show();
      } else if (unit_type == "Central_Split_AC" && allow) {
        fulltime == 'Yes' ? $("#acCoil").show() : $("#centralSplit").show();

      } else if (unit_type == "Heat_Pump" && allow) {
        $("#airHandler").show()
      } else if (unit_type == "Ductless_Unit" && allow) {

      }
      $("#testResult").hide();
      oneBack();
    }


    // (10.1)

    function refrigerantSubmit() {
      fulltime = localStorage.getItem('fulltime');

      if (fulltime == "Yes") {
        $("#refrigerant").hide();
        $("#windows").show();
        $("#hersTitle").append(" > Windows");

      } else {
        $("#refrigerant").hide();
        $("#notes").show();
        $("#hersTitle").append(" > Notes");
      }

    }

    function refrigerant_Back() {
      $("#refrigerant").hide();
      $("#testResult").show();
      oneBack();
    }

    // (10.2)

    function windowSubmit() {
      $("#windows").hide();
      $("#water_heater").show();
      $("#hersTitle").append(" > Water Heater");

    }

    function window_Back() {

      unit_type = localStorage.getItem('unit_type');

      if(unit_type == "Ductless_Unit" ){
        $("#windows").hide();
        $("#indoorUnit").show();
        oneBack();
        
      }else if (unit_type == "Package_Unit"){
        $("#windows").hide();
        $("#testResult").show();
        oneBack();
      }else{
        $("#windows").hide();
        $("#refrigerant").show();
        oneBack();
      }
      
    }


    // (10.3)

    function waterSubmit() {
      $("#water_heater").hide();
      $("#kitchen").show();
      $("#hersTitle").append(" > Kitchen Hood");

    }

    function water_Back() {
      $("#water_heater").hide();
      $("#windows").show();
      oneBack();
    }


    // (10.4)

    function kitchenSubmit() {
      $("#kitchen").hide();
      $("#notes").show();
      $("#hersTitle").append(" > Notes");

    }

    function kitchen_Back() {
      $("#kitchen").hide();
      $("#water_heater").show();
      oneBack();
    }




    //  (11)
    function notes_Back() {
      unit_type = localStorage.getItem('unit_type');
      if (unit_type == "Ductless_Unit") {
        $("#indoorUnit").show();
      } else {
        $("#testResult").show();
      }

      $("#notes").hide();
      oneBack();
    }




    //Clear Initial Form
    function initialClear() {
      $("input[name=test_name]").val('');
      $("input[name=company_name]").val('');
      $("input[name=site_address]").val('');
      $("input[name=duct_location]").prop('checked', false);
      $("input[name=email]").val('');
      $('select[name=number_of_bedroom] option[value=Default]').attr('selected', 'selected');
      $("input[name=unit_type]").prop('checked', false);
    }

    function packageUnit1_Clear() {
      $("input[name=pu_manufacturer]").val('');
      $("input[name=pu_model]").val('');
      $("input[name=pu_serial]").val('');
      $("input[name=pu_btu_input]").val('');
      $("input[name=pu_btu_output]").val('');
      $("input[name=pu_efficiency]").val('');
      $('select[name=pu_tonnage] option[value=Default]').attr('selected', 'selected');
      $('select[name=pu_seer] option[value=Default]').attr('selected', 'selected');
    }


    function centralSplit_Clear() {
      $("input[name=cs_manufacturer]").val('');
      $("input[name=cs_model]").val('');
      $("input[name=cs_serial]").val('');
      $('select[name=cs_tonnage] option[value=Default]').attr('selected', 'selected');
      $('select[name=cs_seer] option[value=Default]').attr('selected', 'selected');
    }

    function heatPump_Clear() {
      $("input[name=heat_manufacturer]").val('');
      $("input[name=heat_model]").val('');
      $("input[name=heat_serial]").val('');
      $('select[name=heat_tonnage] option[value=Default]').attr('selected', 'selected');
      $('select[name=heat_seer] option[value=Default]').attr('selected', 'selected');
    }





    function centralGas_Clear() {
      $("input[name=cg_manufacturer]").val('');
      $("input[name=cg_model]").val('');
      $("input[name=cg_serial]").val('');
      $("input[name=cg_btu_input]").val('');
      $("input[name=cg_btu_output]").val('');
      $("input[name=cg_efficiency]").val('');
      $("input[name=cg_fulltime]").prop('checked', false);

    }

    function acCoil_Clear() {
      $("input[name=acc_manufacturer]").val('');
      $("input[name=acc_model]").val('');
      $("input[name=acc_serial]").val('');

    }


    function airHandler_Clear() {
      $("input[name=air_manufacturer]").val('');
      $("input[name=air_model]").val('');
      $("input[name=air_serial]").val('');
      $("input[name=air_btu_input]").val('');
      $("input[name=air_btu_output]").val('');
      $("input[name=air_efficiency]").val('');

    }

    function condenser_Clear() {
      $("input[name=con_manufacturer]").val('');
      $("input[name=con_model]").val('');
      $("input[name=con_serial]").val('');
      $("input[name=con_btu_input]").val('');
      $('select[name=con_tonnage] option[value=Default]').attr('selected', 'selected');
      $('select[name=con_seer] option[value=Default]').attr('selected', 'selected');
    }


    function indoorUnit_Clear() {

      $("input[name=in_manufacturer]").val('');
      $("input[name=in_model]").val('');
      $("input[name=in_serial]").val('');
      $("input[name=in_btu_input]").val('');
      $("input[name=in_btu_output]").val('');
      $("input[name=in_pounds]").val('');
      $("input[name=in_ounces]").val('');

    }





    function testResult_Clear() {
      $("input[name=test_fanWatt]").val('');
      $('select[name=test_ductLeakage] option[value=Default]').attr('selected', 'selected');
      $("input[name=test_duct_leak_result]").val('');
      $("input[name=test_cfm1]").val('');
      $("input[name=test_location1]").val('');
      $("input[name=test_cfm2]").val('');
      $("input[name=test_location2]").val('');
      $("input[name=test_cfm3]").val('');
      $("input[name=test_location3]").val('');
      $("input[name=test_cfm4]").val('');
      $("input[name=test_location4]").val('');
      $("input[name=test_cfm5]").val('');
      $("input[name=test_location5]").val('');
    }


    function notes_Clear() {
      $("input[name=notes]").val('');
    }
    function oneBack() {
      title = $("#hersTitle").html();
      title = title.substr(0, title.lastIndexOf('&gt;') - 1);
      $("#hersTitle").html(title);
    }




  </script>
</body>

</html>