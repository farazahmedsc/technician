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

  <section class="loader">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  </section>
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
            <h3 id="form_number" style="display:none;">First Form</h3>
              <h4 class="card-title" id="hersTitle">HERS Test</h4>
            



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


                
                      <div class="row" id="ask_no_of_system">
                      <div class="col-md-12">
                    <div class="form-group">
                      <label>Total How many systems are there*</label>
                      <select class="form-control" name="no_of_system">
                        <option value="1" Selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>                        
                      </select>
                    </div>

                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="no_of_system()">Next</button>

                      </div>

                 </div>




              <form class="forms-sample" id="formTech" method="post" action="<?php echo base_url();?>form/create"
                enctype="multipart/form-data">
                


              <div id="first_Form">
                  <div class="row" id="initialForm">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Test Name*</label>
                        <input type="text" class="form-control" name="test_name" placeholder="Test Name">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6" style="display: none;">
                      <div class="form-group">
                        <label>URL*</label>
                        <input type="text" class="form-control" name="url" placeholder="url " value="form">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6" style="display: none;">
                      <div class="form-group">
                        <label>Fprms Number*</label>
                        <input type="text" class="form-control" name="no_of_form" placeholder="forms Number ">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Company Name*</label>
                        <input type="text" class="form-control" name="company_name" placeholder="Company Name">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Site Address*</label>
                        <input type="text" class="form-control" name="site_address" placeholder="Site Address">
                      </div>
                    </div><!-- col-md-6 End offset-sm-1-->



                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-12">Duct Location*</label>
                        <div class="col-sm-11 offset-sm-1">
                          <div class="row">
                            <div class="form-check col-sm-3 ">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="duct_location" value="Crawl_Space">
                                Crawl Space
                              </label>
                            </div>

                            <div class="form-check col-sm-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="duct_location" value="Attic">
                                Attic
                              </label>
                            </div>

                            <div class="form-check col-sm-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="duct_location" value="Garage">
                                Garage
                              </label>
                            </div>


                            <div class="form-check col-sm-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="duct_location" value="No_Ducts">
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
                        <input type="text" class="form-control" name="email" placeholder="Email">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Number of Bedrooms*</label>
                        <select class="form-control" name="number_of_bedroom">
                          <option value="Default">Default</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                        </select>
                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Unit Type*</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="unit_type" value="Package_Unit">
                            Package Unit
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="unit_type" value="Central_Split_AC">
                            Central Split AC
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="unit_type" value="Heat_Pump">
                            Heat Pump
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="unit_type" value="Ductless_Unit">
                            Ductless Unit
                          </label>
                        </div>

                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="initialSubmit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="initialClear()">Clear Form</button>

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
                        <input type="text" class="form-control" name="pu_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="pu_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="pu_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Input *</label>
                        <input type="text" class="form-control" name="pu_btu_input" placeholder="BTU Input">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Output *</label>
                        <input type="text" class="form-control" name="pu_btu_output" placeholder="BTU Output">
                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Efficiency *</label>
                        <input type="text" class="form-control" name="pu_efficiency" placeholder="Efficiency">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tonnage *</label>
                        <select class="form-control" name="pu_tonnage">
                          <option value="Default">Default</option>
                          <option value="0.75">0.75</option>
                          <option value="1">1</option>
                          <option value="1.5">1.5</option>
                          <option value="2">2</option>
                          <option value="2.5">2.5</option>
                          <option value="3">3</option>
                          <option value="3.5">3.5</option>
                          <option value="4">4</option>
                          <option value="4.5">4.5</option>
                          <option value="5">5</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Seers *</label>
                        <select class="form-control" name="pu_seer">
                          <option value="Default">Default</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-12">Full Title 24? *</label>
                        <div class="form-check col-sm-3 offset-sm-1">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="pu_fulltime" value="Yes">
                            Yes
                          </label>
                        </div>

                        <div class="form-check col-sm-3">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="pu_fulltime" value="No">
                            No
                          </label>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->




                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Package Unit Image</label>
                        <input type="file" name="pu_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                        <input type="text" class="form-control" name="cs_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="cs_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="cs_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tonnage *</label>
                        <select class="form-control" name="cs_tonnage">
                          <option value="Default">Default</option>
                          <option value="0.75">0.75</option>
                          <option value="1">1</option>
                          <option value="1.5">1.5</option>
                          <option value="2">2</option>
                          <option value="2.5">2.5</option>
                          <option value="3">3</option>
                          <option value="3.5">3.5</option>
                          <option value="4">4</option>
                          <option value="4.5">4.5</option>
                          <option value="5">5</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Seers *</label>
                        <select class="form-control" name="cs_seer">
                          <option value="Default">Default</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Central Split AC Image</label>
                        <input type="file" name="cs_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                        <input type="text" class="form-control" name="heat_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="heat_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="heat_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tonnage *</label>
                        <select class="form-control" name="heat_tonnage">
                          <option value="Default">Default</option>
                          <option value="0.75">0.75</option>
                          <option value="1">1</option>
                          <option value="1.5">1.5</option>
                          <option value="2">2</option>
                          <option value="2.5">2.5</option>
                          <option value="3">3</option>
                          <option value="3.5">3.5</option>
                          <option value="4">4</option>
                          <option value="4.5">4.5</option>
                          <option value="5">5</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Seers *</label>
                        <select class="form-control" name="heat_seer">
                          <option value="Default">Default</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Heat Pump Image</label>
                        <input type="file" name="heat_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                        <input type="text" class="form-control" name="cg_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="cg_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="cg_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Input *</label>
                        <input type="text" class="form-control" name="cg_btu_input" placeholder="BTU Input">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Output *</label>
                        <input type="text" class="form-control" name="cg_btu_output" placeholder="BTU Output">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Efficiency *</label>
                        <input type="text" class="form-control" name="cg_efficiency" placeholder="Efficiency">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-12">Full Title 24? *</label>
                        <div class="form-check col-sm-3 offset-sm-1">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="cg_fulltime" value="Yes">
                            Yes
                          </label>
                        </div>

                        <div class="form-check col-sm-3">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="cg_fulltime" value="No">
                            No
                          </label>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Central Gas Furnace Image</label>
                        <input type="file" name="cg_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                        <input type="text" class="form-control" name="acc_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="acc_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="acc_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>AC Coil Image</label>
                        <input type="file" name="acc_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="acCoil_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="acCoil_Submit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="acCoil_Clear()">Clear Form</button>

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
                        <input type="text" class="form-control" name="air_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="air_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="air_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Input *</label>
                        <input type="text" class="form-control" name="air_btu_input" placeholder="BTU Input">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Output *</label>
                        <input type="text" class="form-control" name="air_btu_output" placeholder="BTU Output">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Efficiency *</label>
                        <input type="text" class="form-control" name="air_efficiency" placeholder="Efficiency">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-12">Full Title 24? *</label>
                        <div class="form-check col-sm-3 offset-sm-1">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="air_fulltime" value="Yes">
                            Yes
                          </label>
                        </div>

                        <div class="form-check col-sm-3">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="air_fulltime" value="No">
                            No
                          </label>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Central Air Handler Image</label>
                        <input type="file" name="air_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                        <input type="text" class="form-control" name="con_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="con_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="con_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Input *</label>
                        <input type="text" class="form-control" name="con_btu_input" placeholder="BTU Input">
                      </div>
                    </div><!-- col-md-6 End-->




                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tonnage *</label>
                        <select class="form-control" name="con_tonnage">
                          <option value="Default">Default</option>
                          <option value="0.75">0.75</option>
                          <option value="1">1</option>
                          <option value="1.5">1.5</option>
                          <option value="2">2</option>
                          <option value="2.5">2.5</option>
                          <option value="3">3</option>
                          <option value="3.5">3.5</option>
                          <option value="4">4</option>
                          <option value="4.5">4.5</option>
                          <option value="5">5</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Seers *</label>
                        <select class="form-control" name="con_seer">
                          <option value="Default">Default</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Pounds *</label>
                        <input type="text" class="form-control" name="in_pounds" placeholder="Pounds">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Ounces *</label>
                        <input type="text" class="form-control" name="in_ounces" placeholder="BTU Ounces">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Condenser Image</label>
                        <input type="file" name="con_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                        <input type="text" class="form-control" name="in_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="in_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="in_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Input *</label>
                        <input type="text" class="form-control" name="in_btu_input" placeholder="BTU Input">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Output *</label>
                        <input type="text" class="form-control" name="in_btu_output" placeholder="BTU Output">
                      </div>
                    </div><!-- col-md-6 End-->


                    

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-12">Full Title 24? *</label>
                        <div class="form-check col-sm-3 offset-sm-1">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_fulltime" value="Yes">
                            Yes
                          </label>
                        </div>

                        <div class="form-check col-sm-3">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_fulltime" value="No">
                            No
                          </label>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Indoor Unit Image</label>
                        <input type="file" name="in_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                          placeholder="Duct Leakage CFM Result">
                      </div>
                    </div><!-- col-md-6 End-->




                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Duct Leakage CFM *</label>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="test_ductLeakage" value="5%">
                                5%
                              </label>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="test_ductLeakage" value="15%_Partial">
                                15% (Partial)
                              </label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="test_ductLeakage" value="15%_System">
                                15% (System only)
                              </label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="test_ductLeakage"
                                  value="Exempt_Asbestos">
                                Exempt (Asbestos)
                              </label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="test_ductLeakage" value="Exempt_40ft">
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
                        <input type="text" class="form-control" name="test_fanWatt" placeholder="Fan Watt Draw">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Airflow CFM Result</h5>
                        <label>CFM (Return 1) </label>
                        <input type="text" class="form-control" name="test_cfm1" placeholder="CFM (Return 1)">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location (Return 1) </label>
                        <input type="text" class="form-control" name="test_location1" placeholder="Location (Return 1)">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>CFM (Return 2)</label>
                        <input type="text" class="form-control" name="test_cfm2" placeholder="CFM (Return 2)">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location (Return 2)</label>
                        <input type="text" class="form-control" name="test_location2" placeholder="Location (Return 2)">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>CFM (Return 3)</label>
                        <input type="text" class="form-control" name="test_cfm3" placeholder="CFM (Return 3)">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location (Return 3)</label>
                        <input type="text" class="form-control" name="test_location3" placeholder="Location (Return 3)">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>CFM (Return 4)</label>
                        <input type="text" class="form-control" name="test_cfm4" placeholder="CFM (Return 4)">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location (Return 4)</label>
                        <input type="text" class="form-control" name="test_location4" placeholder="Location (Return 4)">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>CFM (Return 5)</label>
                        <input type="text" class="form-control" name="test_cfm5" placeholder="CFM (Return 5)">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location (Return 5)</label>
                        <input type="text" class="form-control" name="test_location5" placeholder="Location (Return 5)">
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
                      <div class="form-group">
                        <label>Refrigerant (MCH 25) Image</label>
                        <input type="file" name="ref_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                      <div class="form-group">
                        <label>Windows Image</label>
                        <input type="file" name="win_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                      <div class="form-group">
                        <label>Water Heater Image</label>
                        <input type="file" name="water_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                      <div class="form-group">
                        <label>Kitchen Hood Image</label>
                        <input type="file" name="kitchen_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                        <input type="text" class="form-control" name="notes" placeholder="Notes">
                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="notes_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" id="firstNotesSubmit" onclick="submitSend()">Submit</button>
                      <button type="button" class="btn btn-primary mr-2" id="firstNotesNext" onclick="notes_first_end()">Move to 2nd Form</button>
                      <button type="button" class="btn btn-light float-right" onclick="notes_Clear()">Clear Form</button>

                    </div>


                  </div>

                  <!-- Notes 11 End -->
                </div>

                <!-- ================================================================================= -->
              <!-- First Form End -->
                <!-- ================================================================================= -->





              <div id="second_Form" style="display:none;">
                <div class="row" id="second_initialForm">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Test Name*</label>
                    <input type="text" class="form-control" name="second_test_name" placeholder="Test Name" readonly>
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6" style="display: none;">
                    <div class="form-group">
                    <label>URL*</label>
                    <input type="text" class="form-control" name="second_url" placeholder="url " value="form">
                    </div>
                </div><!-- col-md-6 End-->


                


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Company Name*</label>
                    <input type="text" class="form-control" name="second_company_name" placeholder="Company Name" readonly>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Site Address*</label>
                    <input type="text" class="form-control" name="second_site_address" placeholder="Site Address" readonly>
                    </div>
                </div><!-- col-md-6 End offset-sm-1-->



                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-12">Duct Location*</label>
                    <div class="col-sm-11 offset-sm-1">
                        <div class="row">
                        <div class="form-check col-sm-3 ">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="second_duct_location" value="Crawl_Space">
                            Crawl Space
                            </label>
                        </div>

                        <div class="form-check col-sm-3">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="second_duct_location" value="Attic">
                            Attic
                            </label>
                        </div>

                        <div class="form-check col-sm-3">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="second_duct_location" value="Garage">
                            Garage
                            </label>
                        </div>


                        <div class="form-check col-sm-3">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="second_duct_location" value="No_Ducts">
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
                    <input type="text" class="form-control" name="second_email" placeholder="Email" readonly>
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Number of Bedrooms*</label>
                    <select class="form-control" name="second_number_of_bedroom">
                        <option value="Default">Default</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <div class="form-group">
                    <label>Unit Type*</label>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_unit_type" value="Package_Unit">
                        Package Unit
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_unit_type" value="Central_Split_AC">
                        Central Split AC
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_unit_type" value="Heat_Pump">
                        Heat Pump
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_unit_type" value="Ductless_Unit">
                        Ductless Unit
                        </label>
                    </div>

                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_initialSubmit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_initialClear()">Clear Form</button>

                </div>

                </div>



                <!-- Package Unit 1 (2) Start -->

                <div class="row" id="second_packageUnit1">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Package Unit</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="second_pu_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="second_pu_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="second_pu_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Input *</label>
                    <input type="text" class="form-control" name="second_pu_btu_input" placeholder="BTU Input">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Output *</label>
                    <input type="text" class="form-control" name="second_pu_btu_output" placeholder="BTU Output">
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-6">
                    <div class="form-group">
                    <label>Efficiency *</label>
                    <input type="text" class="form-control" name="second_pu_efficiency" placeholder="Efficiency">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Tonnage *</label>
                    <select class="form-control" name="second_pu_tonnage">
                        <option value="Default">Default</option>
                        <option value="0.75">0.75</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-6">
                    <div class="form-group">
                    <label>Seers *</label>
                    <select class="form-control" name="second_pu_seer">
                        <option value="Default">Default</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-12">Full Title 24? *</label>
                    <div class="form-check col-sm-3 offset-sm-1">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_pu_fulltime" value="Yes">
                        Yes
                        </label>
                    </div>

                    <div class="form-check col-sm-3">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_pu_fulltime" value="No">
                        No
                        </label>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->




                <div class="col-md-12">
                    <div class="form-group">
                    <label>Package Unit Image</label>
                    <input type="file" name="second_pu_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_packageUnit1_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_packageUnit1_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_packageUnit1_Clear()">Clear
                    Form</button>

                </div>

                </div>



                <!-- Package Unit 1 (2) End -->


                <!-- Central Split AC (3) Start -->


                <div class="row" id="second_centralSplit">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Central Split AC</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="second_cs_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="second_cs_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="second_cs_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Tonnage *</label>
                    <select class="form-control" name="second_cs_tonnage">
                        <option value="Default">Default</option>
                        <option value="0.75">0.75</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-6">
                    <div class="form-group">
                    <label>Seers *</label>
                    <select class="form-control" name="second_cs_seer">
                        <option value="Default">Default</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Central Split AC Image</label>
                    <input type="file" name="second_cs_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_centralSplit_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_centralSplit_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_centralSplit_Clear()">Clear
                    Form</button>

                </div>

                </div>


                <!-- Central Split AC (3) End -->


                <!-- Heat Pump (4) Start -->


                <div class="row" id="second_heatPump">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Heat Pump</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="second_heat_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="second_heat_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="second_heat_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Tonnage *</label>
                    <select class="form-control" name="second_heat_tonnage">
                        <option value="Default">Default</option>
                        <option value="0.75">0.75</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-6">
                    <div class="form-group">
                    <label>Seers *</label>
                    <select class="form-control" name="second_heat_seer">
                        <option value="Default">Default</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <div class="form-group">
                    <label>Heat Pump Image</label>
                    <input type="file" name="second_heat_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_heatPump_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_heatPump_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_heatPump_Clear()">Clear
                    Form</button>

                </div>

                </div>


                <!-- Heat Pump (4) End -->



                <!-- Central Gas Furnace (5) Start -->

                <div class="row" id="second_centralGas">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Central Gas Furnace</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="second_cg_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="second_cg_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="second_cg_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Input *</label>
                    <input type="text" class="form-control" name="second_cg_btu_input" placeholder="BTU Input">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Output *</label>
                    <input type="text" class="form-control" name="second_cg_btu_output" placeholder="BTU Output">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Efficiency *</label>
                    <input type="text" class="form-control" name="second_cg_efficiency" placeholder="Efficiency">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-12">Full Title 24? *</label>
                    <div class="form-check col-sm-3 offset-sm-1">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_cg_fulltime" value="Yes">
                        Yes
                        </label>
                    </div>

                    <div class="form-check col-sm-3">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_cg_fulltime" value="No">
                        No
                        </label>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <div class="form-group">
                    <label>Central Gas Furnace Image</label>
                    <input type="file" name="second_cg_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_centralGas_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_centralGas_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_centralGas_Clear()">Clear
                    Form</button>

                </div>

                </div>

                <!-- Central Gas Furnace (5) End -->



                <!-- AC Coil (6) Start -->

                <div class="row" id="second_acCoil">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>AC Coil</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="second_acc_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="second_acc_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="second_acc_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <div class="form-group">
                    <label>AC Coil Image</label>
                    <input type="file" name="second_acc_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_acCoil_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_acCoil_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_acCoil_Clear()">Clear Form</button>

                </div>

                </div>

                <!-- AC Coil (6) End -->




                <!-- Air Handler (7) Start -->

                <div class="row" id="second_airHandler">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Air Handler</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="second_air_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="second_air_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="second_air_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Input *</label>
                    <input type="text" class="form-control" name="second_air_btu_input" placeholder="BTU Input">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Output *</label>
                    <input type="text" class="form-control" name="second_air_btu_output" placeholder="BTU Output">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Efficiency *</label>
                    <input type="text" class="form-control" name="second_air_efficiency" placeholder="Efficiency">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-12">Full Title 24? *</label>
                    <div class="form-check col-sm-3 offset-sm-1">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_air_fulltime" value="Yes">
                        Yes
                        </label>
                    </div>

                    <div class="form-check col-sm-3">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_air_fulltime" value="No">
                        No
                        </label>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <div class="form-group">
                    <label>Central Air Handler Image</label>
                    <input type="file" name="second_air_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_airHandler_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_airHandler_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_airHandler_Clear()">Clear
                    Form</button>

                </div>

                </div>

                <!-- Central Air Handler (7) End -->

                <!--Condenser (8) Start -->

                <div class="row" id="second_condenser">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Condenser</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="second_con_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="second_con_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="second_con_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Input *</label>
                    <input type="text" class="form-control" name="second_con_btu_input" placeholder="BTU Input">
                    </div>
                </div><!-- col-md-6 End-->




                <div class="col-md-6">
                    <div class="form-group">
                    <label>Tonnage *</label>
                    <select class="form-control" name="second_con_tonnage">
                        <option value="Default">Default</option>
                        <option value="0.75">0.75</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-6">
                    <div class="form-group">
                    <label>Seers *</label>
                    <select class="form-control" name="second_con_seer">
                        <option value="Default">Default</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Pounds *</label>
                    <input type="text" class="form-control" name="second_in_pounds" placeholder="Pounds">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Ounces *</label>
                    <input type="text" class="form-control" name="second_in_ounces" placeholder="BTU Ounces">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <div class="form-group">
                    <label>Condenser Image</label>
                    <input type="file" name="second_con_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_condenser_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_condenser_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_condenser_Clear()">Clear
                    Form</button>

                </div>

                </div>



                <!-- Condenser (8) End -->


                <!--Indoor Unit (9) Start -->

                <div class="row" id="second_indoorUnit">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Indoor Unit</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="second_in_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="second_in_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="second_in_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Input *</label>
                    <input type="text" class="form-control" name="second_in_btu_input" placeholder="BTU Input">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Output *</label>
                    <input type="text" class="form-control" name="second_in_btu_output" placeholder="BTU Output">
                    </div>
                </div><!-- col-md-6 End-->


                

                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-12">Full Title 24? *</label>
                    <div class="form-check col-sm-3 offset-sm-1">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_in_fulltime" value="Yes">
                        Yes
                        </label>
                    </div>

                    <div class="form-check col-sm-3">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="second_in_fulltime" value="No">
                        No
                        </label>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Indoor Unit Image</label>
                    <input type="file" name="second_in_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->






                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_indoorUnit_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_indoorUnit_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_indoorUnit_Clear()">Clear
                    Form</button>

                </div>

                </div>



                <!-- Indoor Unit (9) End -->


                <!-- Test Result 10 Start -->

                <div class="row" id="second_testResult">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Test Result</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Duct Leakage CFM Result</label>
                    <input type="text" class="form-control" name="second_test_duct_leak_result"
                        placeholder="Duct Leakage CFM Result">
                    </div>
                </div><!-- col-md-6 End-->




                <div class="col-md-6">
                    <div class="form-group">
                    <label>Duct Leakage CFM *</label>
                    <div class="row">
                        <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="second_test_ductLeakage" value="5%">
                            5%
                            </label>
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="second_test_ductLeakage" value="15%_Partial">
                            15% (Partial)
                            </label>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="second_test_ductLeakage" value="15%_System">
                            15% (System only)
                            </label>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="second_test_ductLeakage"
                                value="Exempt_Asbestos">
                            Exempt (Asbestos)
                            </label>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="second_test_ductLeakage" value="Exempt_40ft">
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
                    <input type="text" class="form-control" name="second_test_fanWatt" placeholder="Fan Watt Draw">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <h5>Airflow CFM Result</h5>
                    <label>CFM (Return 1) </label>
                    <input type="text" class="form-control" name="second_test_cfm1" placeholder="CFM (Return 1)">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Location (Return 1) </label>
                    <input type="text" class="form-control" name="second_test_location1" placeholder="Location (Return 1)">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>CFM (Return 2)</label>
                    <input type="text" class="form-control" name="second_test_cfm2" placeholder="CFM (Return 2)">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Location (Return 2)</label>
                    <input type="text" class="form-control" name="second_test_location2" placeholder="Location (Return 2)">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>CFM (Return 3)</label>
                    <input type="text" class="form-control" name="second_test_cfm3" placeholder="CFM (Return 3)">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Location (Return 3)</label>
                    <input type="text" class="form-control" name="second_test_location3" placeholder="Location (Return 3)">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>CFM (Return 4)</label>
                    <input type="text" class="form-control" name="second_test_cfm4" placeholder="CFM (Return 4)">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Location (Return 4)</label>
                    <input type="text" class="form-control" name="second_test_location4" placeholder="Location (Return 4)">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>CFM (Return 5)</label>
                    <input type="text" class="form-control" name="second_test_cfm5" placeholder="CFM (Return 5)">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Location (Return 5)</label>
                    <input type="text" class="form-control" name="second_test_location5" placeholder="Location (Return 5)">
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_testResult_Back()">Back</button>

                    <button type="button" class="btn btn-primary mr-2" onclick="second_testResultSubmit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_testResult_Clear()">Clear
                    Form</button>

                </div>



                </div>

                <!-- Test Result 10 End -->


                <!-- Refrigerant (MCH 25) 10.1 Start -->

                <div class="row" id="second_refrigerant">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Refrigerant (MCH 25)</h3>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Refrigerant (MCH 25) Image</label>
                    <input type="file" name="second_ref_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_refrigerant_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_refrigerantSubmit()">Next</button>
                </div>

                </div>
                <!-- Refrigerant (MCH 25) 10.1 End -->



                <!-- Windows 10.2 Start -->

                <div class="row" id="second_windows">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Windows</h3>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Windows Image</label>
                    <input type="file" name="second_win_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_window_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_windowSubmit()">Next</button>
                </div>

                </div>
                <!-- Windows 10.2 End -->



                <!-- Water Heater 10.3 Start -->

                <div class="row" id="second_water_heater">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Water Heater</h3>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Water Heater Image</label>
                    <input type="file" name="second_water_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_water_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_waterSubmit()">Next</button>
                </div>

                </div>
                <!-- Water Heater 10.3 End -->


                <!-- Kitchen Hood 10.4 Start -->

                <div class="row" id="second_kitchen">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Kitchen Hood</h3>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Kitchen Hood Image</label>
                    <input type="file" name="second_kitchen_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_kitchen_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="second_kitchenSubmit()">Next</button>
                </div>

                </div>
                <!-- Kitchen Hood 10.4 End -->


                <!-- Notes 11 Start -->

                <div class="row" id="second_notes">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3> Notes </h3>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Notes</label>
                    <input type="text" class="form-control" name="second_notes" placeholder="Notes">
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="second_notes_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" id="secondNotesSubmit"  onclick="submitSend()">Submit</button>
                    <button type="button" class="btn btn-primary mr-2" id="secondNotesNext" onclick="notes_second_end()">Move to 3rd Form</button>
                    <button type="button" class="btn btn-light float-right" onclick="second_notes_Clear()">Clear Form</button>

                </div>


                </div>

                <!-- Notes 11 End -->
              </div>

              <!-- ================================================================================= -->
              <!-- Second Form End -->
              <!-- ================================================================================= -->
             
             
              <div id="third_Form" style="display:none;">
                <div class="row" id="third_initialForm">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Test Name*</label>
                    <input type="text" class="form-control" name="third_test_name" placeholder="Test Name" readonly>
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6" style="display: none;">
                    <div class="form-group">
                    <label>URL*</label>
                    <input type="text" class="form-control" name="third_url" placeholder="url " value="form">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Company Name*</label>
                    <input type="text" class="form-control" name="third_company_name" placeholder="Company Name" readonly>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Site Address*</label>
                    <input type="text" class="form-control" name="third_site_address" placeholder="Site Address" readonly>
                    </div>
                </div><!-- col-md-6 End offset-sm-1-->



                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-12">Duct Location*</label>
                    <div class="col-sm-11 offset-sm-1">
                        <div class="row">
                        <div class="form-check col-sm-3 ">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="third_duct_location" value="Crawl_Space">
                            Crawl Space
                            </label>
                        </div>

                        <div class="form-check col-sm-3">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="third_duct_location" value="Attic">
                            Attic
                            </label>
                        </div>

                        <div class="form-check col-sm-3">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="third_duct_location" value="Garage">
                            Garage
                            </label>
                        </div>


                        <div class="form-check col-sm-3">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="third_duct_location" value="No_Ducts">
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
                    <input type="text" class="form-control" name="third_email" placeholder="Email" readonly>
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Number of Bedrooms*</label>
                    <select class="form-control" name="third_number_of_bedroom">
                        <option value="Default">Default</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <div class="form-group">
                    <label>Unit Type*</label>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_unit_type" value="Package_Unit">
                        Package Unit
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_unit_type" value="Central_Split_AC">
                        Central Split AC
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_unit_type" value="Heat_Pump">
                        Heat Pump
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_unit_type" value="Ductless_Unit">
                        Ductless Unit
                        </label>
                    </div>

                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_initialSubmit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_initialClear()">Clear Form</button>

                </div>

                </div>



                <!-- Package Unit 1 (2) Start -->

                <div class="row" id="third_packageUnit1">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Package Unit</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="third_pu_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="third_pu_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="third_pu_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Input *</label>
                    <input type="text" class="form-control" name="third_pu_btu_input" placeholder="BTU Input">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Output *</label>
                    <input type="text" class="form-control" name="third_pu_btu_output" placeholder="BTU Output">
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-6">
                    <div class="form-group">
                    <label>Efficiency *</label>
                    <input type="text" class="form-control" name="third_pu_efficiency" placeholder="Efficiency">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Tonnage *</label>
                    <select class="form-control" name="third_pu_tonnage">
                        <option value="Default">Default</option>
                        <option value="0.75">0.75</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-6">
                    <div class="form-group">
                    <label>Seers *</label>
                    <select class="form-control" name="third_pu_seer">
                        <option value="Default">Default</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-12">Full Title 24? *</label>
                    <div class="form-check col-sm-3 offset-sm-1">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_pu_fulltime" value="Yes">
                        Yes
                        </label>
                    </div>

                    <div class="form-check col-sm-3">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_pu_fulltime" value="No">
                        No
                        </label>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->




                <div class="col-md-12">
                    <div class="form-group">
                    <label>Package Unit Image</label>
                    <input type="file" name="third_pu_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_packageUnit1_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_packageUnit1_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_packageUnit1_Clear()">Clear
                    Form</button>

                </div>

                </div>



                <!-- Package Unit 1 (2) End -->


                <!-- Central Split AC (3) Start -->


                <div class="row" id="third_centralSplit">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Central Split AC</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="third_cs_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="third_cs_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="third_cs_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Tonnage *</label>
                    <select class="form-control" name="third_cs_tonnage">
                        <option value="Default">Default</option>
                        <option value="0.75">0.75</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-6">
                    <div class="form-group">
                    <label>Seers *</label>
                    <select class="form-control" name="third_cs_seer">
                        <option value="Default">Default</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Central Split AC Image</label>
                    <input type="file" name="third_cs_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_centralSplit_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_centralSplit_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_centralSplit_Clear()">Clear
                    Form</button>

                </div>

                </div>


                <!-- Central Split AC (3) End -->


                <!-- Heat Pump (4) Start -->


                <div class="row" id="third_heatPump">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Heat Pump</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="third_heat_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="third_heat_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="third_heat_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Tonnage *</label>
                    <select class="form-control" name="third_heat_tonnage">
                        <option value="Default">Default</option>
                        <option value="0.75">0.75</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-6">
                    <div class="form-group">
                    <label>Seers *</label>
                    <select class="form-control" name="third_heat_seer">
                        <option value="Default">Default</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <div class="form-group">
                    <label>Heat Pump Image</label>
                    <input type="file" name="third_heat_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_heatPump_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_heatPump_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_heatPump_Clear()">Clear
                    Form</button>

                </div>

                </div>


                <!-- Heat Pump (4) End -->



                <!-- Central Gas Furnace (5) Start -->

                <div class="row" id="third_centralGas">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Central Gas Furnace</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="third_cg_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="third_cg_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="third_cg_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Input *</label>
                    <input type="text" class="form-control" name="third_cg_btu_input" placeholder="BTU Input">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Output *</label>
                    <input type="text" class="form-control" name="third_cg_btu_output" placeholder="BTU Output">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Efficiency *</label>
                    <input type="text" class="form-control" name="third_cg_efficiency" placeholder="Efficiency">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-12">Full Title 24? *</label>
                    <div class="form-check col-sm-3 offset-sm-1">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_cg_fulltime" value="Yes">
                        Yes
                        </label>
                    </div>

                    <div class="form-check col-sm-3">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_cg_fulltime" value="No">
                        No
                        </label>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <div class="form-group">
                    <label>Central Gas Furnace Image</label>
                    <input type="file" name="third_cg_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_centralGas_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_centralGas_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_centralGas_Clear()">Clear
                    Form</button>

                </div>

                </div>

                <!-- Central Gas Furnace (5) End -->



                <!-- AC Coil (6) Start -->

                <div class="row" id="third_acCoil">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>AC Coil</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="third_acc_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="third_acc_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="third_acc_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <div class="form-group">
                    <label>AC Coil Image</label>
                    <input type="file" name="third_acc_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_acCoil_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_acCoil_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_acCoil_Clear()">Clear Form</button>

                </div>

                </div>

                <!-- AC Coil (6) End -->




                <!-- Air Handler (7) Start -->

                <div class="row" id="third_airHandler">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Air Handler</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="third_air_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="third_air_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="third_air_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Input *</label>
                    <input type="text" class="form-control" name="third_air_btu_input" placeholder="BTU Input">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Output *</label>
                    <input type="text" class="form-control" name="third_air_btu_output" placeholder="BTU Output">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Efficiency *</label>
                    <input type="text" class="form-control" name="third_air_efficiency" placeholder="Efficiency">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-12">Full Title 24? *</label>
                    <div class="form-check col-sm-3 offset-sm-1">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_air_fulltime" value="Yes">
                        Yes
                        </label>
                    </div>

                    <div class="form-check col-sm-3">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_air_fulltime" value="No">
                        No
                        </label>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <div class="form-group">
                    <label>Central Air Handler Image</label>
                    <input type="file" name="third_air_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_airHandler_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_airHandler_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_airHandler_Clear()">Clear
                    Form</button>

                </div>

                </div>

                <!-- Central Air Handler (7) End -->

                <!--Condenser (8) Start -->

                <div class="row" id="third_condenser">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Condenser</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="third_con_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="third_con_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="third_con_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Input *</label>
                    <input type="text" class="form-control" name="third_con_btu_input" placeholder="BTU Input">
                    </div>
                </div><!-- col-md-6 End-->




                <div class="col-md-6">
                    <div class="form-group">
                    <label>Tonnage *</label>
                    <select class="form-control" name="third_con_tonnage">
                        <option value="Default">Default</option>
                        <option value="0.75">0.75</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-6">
                    <div class="form-group">
                    <label>Seers *</label>
                    <select class="form-control" name="third_con_seer">
                        <option value="Default">Default</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                    </select>

                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Pounds *</label>
                    <input type="text" class="form-control" name="third_in_pounds" placeholder="Pounds">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Ounces *</label>
                    <input type="text" class="form-control" name="third_in_ounces" placeholder="BTU Ounces">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <div class="form-group">
                    <label>Condenser Image</label>
                    <input type="file" name="third_con_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_condenser_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_condenser_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_condenser_Clear()">Clear
                    Form</button>

                </div>

                </div>



                <!-- Condenser (8) End -->


                <!--Indoor Unit (9) Start -->

                <div class="row" id="third_indoorUnit">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Indoor Unit</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Manufacturer *</label>
                    <input type="text" class="form-control" name="third_in_manufacturer" placeholder="Manufacturer">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Model Number *</label>
                    <input type="text" class="form-control" name="third_in_model" placeholder="Model Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>Serial Number *</label>
                    <input type="text" class="form-control" name="third_in_serial" placeholder="Serial Number">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Input *</label>
                    <input type="text" class="form-control" name="third_in_btu_input" placeholder="BTU Input">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>BTU Output *</label>
                    <input type="text" class="form-control" name="third_in_btu_output" placeholder="BTU Output">
                    </div>
                </div><!-- col-md-6 End-->


                

                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-12">Full Title 24? *</label>
                    <div class="form-check col-sm-3 offset-sm-1">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_in_fulltime" value="Yes">
                        Yes
                        </label>
                    </div>

                    <div class="form-check col-sm-3">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="third_in_fulltime" value="No">
                        No
                        </label>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Indoor Unit Image</label>
                    <input type="file" name="third_in_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->






                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_indoorUnit_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_indoorUnit_Submit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_indoorUnit_Clear()">Clear
                    Form</button>

                </div>

                </div>



                <!-- Indoor Unit (9) End -->


                <!-- Test Result 10 Start -->

                <div class="row" id="third_testResult">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Test Result</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Duct Leakage CFM Result</label>
                    <input type="text" class="form-control" name="third_test_duct_leak_result"
                        placeholder="Duct Leakage CFM Result">
                    </div>
                </div><!-- col-md-6 End-->




                <div class="col-md-6">
                    <div class="form-group">
                    <label>Duct Leakage CFM *</label>
                    <div class="row">
                        <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="third_test_ductLeakage" value="5%">
                            5%
                            </label>
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="third_test_ductLeakage" value="15%_Partial">
                            15% (Partial)
                            </label>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="third_test_ductLeakage" value="15%_System">
                            15% (System only)
                            </label>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="third_test_ductLeakage"
                                value="Exempt_Asbestos">
                            Exempt (Asbestos)
                            </label>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="third_test_ductLeakage" value="Exempt_40ft">
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
                    <input type="text" class="form-control" name="third_test_fanWatt" placeholder="Fan Watt Draw">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <h5>Airflow CFM Result</h5>
                    <label>CFM (Return 1) </label>
                    <input type="text" class="form-control" name="third_test_cfm1" placeholder="CFM (Return 1)">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Location (Return 1) </label>
                    <input type="text" class="form-control" name="third_test_location1" placeholder="Location (Return 1)">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>CFM (Return 2)</label>
                    <input type="text" class="form-control" name="third_test_cfm2" placeholder="CFM (Return 2)">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Location (Return 2)</label>
                    <input type="text" class="form-control" name="third_test_location2" placeholder="Location (Return 2)">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>CFM (Return 3)</label>
                    <input type="text" class="form-control" name="third_test_cfm3" placeholder="CFM (Return 3)">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Location (Return 3)</label>
                    <input type="text" class="form-control" name="third_test_location3" placeholder="Location (Return 3)">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>CFM (Return 4)</label>
                    <input type="text" class="form-control" name="third_test_cfm4" placeholder="CFM (Return 4)">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Location (Return 4)</label>
                    <input type="text" class="form-control" name="third_test_location4" placeholder="Location (Return 4)">
                    </div>
                </div><!-- col-md-6 End-->


                <div class="col-md-6">
                    <div class="form-group">
                    <label>CFM (Return 5)</label>
                    <input type="text" class="form-control" name="third_test_cfm5" placeholder="CFM (Return 5)">
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Location (Return 5)</label>
                    <input type="text" class="form-control" name="third_test_location5" placeholder="Location (Return 5)">
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_testResult_Back()">Back</button>

                    <button type="button" class="btn btn-primary mr-2" onclick="third_testResultSubmit()">Next</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_testResult_Clear()">Clear
                    Form</button>

                </div>



                </div>

                <!-- Test Result 10 End -->


                <!-- Refrigerant (MCH 25) 10.1 Start -->

                <div class="row" id="third_refrigerant">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Refrigerant (MCH 25)</h3>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Refrigerant (MCH 25) Image</label>
                    <input type="file" name="third_ref_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_refrigerant_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_refrigerantSubmit()">Next</button>
                </div>

                </div>
                <!-- Refrigerant (MCH 25) 10.1 End -->



                <!-- Windows 10.2 Start -->

                <div class="row" id="third_windows">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Windows</h3>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Windows Image</label>
                    <input type="file" name="third_win_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_window_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_windowSubmit()">Next</button>
                </div>

                </div>
                <!-- Windows 10.2 End -->



                <!-- Water Heater 10.3 Start -->

                <div class="row" id="third_water_heater">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Water Heater</h3>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Water Heater Image</label>
                    <input type="file" name="third_water_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_water_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_waterSubmit()">Next</button>
                </div>

                </div>
                <!-- Water Heater 10.3 End -->


                <!-- Kitchen Hood 10.4 Start -->

                <div class="row" id="third_kitchen">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3>Kitchen Hood</h3>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Kitchen Hood Image</label>
                    <input type="file" name="third_kitchen_image[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                </div><!-- col-md-6 End-->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_kitchen_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="third_kitchenSubmit()">Next</button>
                </div>

                </div>
                <!-- Kitchen Hood 10.4 End -->


                <!-- Notes 11 Start -->

                <div class="row" id="third_notes">
                <div class="col-md-12">
                    <div class="headingForm">
                    <h3> Notes </h3>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                    <label>Notes</label>
                    <input type="text" class="form-control" name="third_notes" placeholder="Notes">
                    </div>
                </div><!-- col-md-6 End-->



                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mr-2" onclick="third_notes_Back()">Back</button>
                    <button type="button" class="btn btn-primary mr-2" id="thirdNotesSubmit"  onclick="submitSend()">Submit</button>
                    <button type="button" class="btn btn-light float-right" onclick="third_notes_Clear()">Clear Form</button>

                </div>


                </div>

                <!-- Notes 11 End -->
              </div>

                <!-- ================================================================================= -->
                <!-- third Form End -->
                <!-- ================================================================================= -->


                <button type="submit" class="btn btn-primary mr-2" id="submitBtn" style="display:none;" >Submit</button>



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
  <div></div>
  <!-- plugins:js -->
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
  function no_of_system(){
    v = $("select[name=no_of_system] option:selected").val() 
    localStorage.setItem("no_of_system", v);   
    $("input[name=no_of_form]").val(v);
    
  $("#ask_no_of_system").hide();
    $("#form_number").show();
    $("#initialForm").show();
    if(v == '1'){
      $("#firstNotesNext").hide();
      $("#firstNotesSubmit");
    }else if(v=='2'){
      $("#firstNotesSubmit").hide();
      $("#secondNotesNext").hide();

    }else{
      $("#firstNotesSubmit").hide();
      $("#secondNotesSubmit").hide();
      
    }   
  }

  function notes_first_end(){

    $("#form_number").html("Second Form "); 
    $("#hersTitle").html("Hers Title ");

    $("#first_Form").hide()
    $("#second_Form").show();


    $("input[name=second_test_name]").val($("input[name=test_name]").val());
    $("input[name=second_company_name]").val($("input[name=company_name]").val());
    $("input[name=second_site_address]").val($("input[name=site_address]").val());
    $("input[name=second_email]").val($("input[name=email]").val());

    
  }

  function notes_second_end(){
    $("#form_number").html("Third Form "); 
    $("#hersTitle").html("Hers Title ");

    $("#second_Form").hide();
    $("#third_Form").show();    


    $("input[name=third_test_name]").val($("input[name=test_name]").val());
    $("input[name=third_company_name]").val($("input[name=company_name]").val());
    $("input[name=third_site_address]").val($("input[name=site_address]").val());
    $("input[name=third_email]").val($("input[name=email]").val());

  }




  function submitSend(){
    $(".loader").css("display","flex");
    $("#submitBtn").click();
  }
  </script>


<!-- First Script -->
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
      $("#initialForm").hide();

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

        $("#indoorUnit").hide();
 
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



<!-- Second Script -->
<script>


        
    unit_type = "";
    second_hideAll()
    function second_hideAll() {
    $("#second_packageUnit1").hide();
    $("#second_centralSplit").hide();
    $("#second_heatPump").hide();
    $("#second_centralGas").hide();
    $("#second_acCoil").hide();
    $("#second_airHandler").hide();
    $("#second_condenser").hide();
    $("#second_indoorUnit").hide();
    $("#second_testResult").hide();
    $("#second_refrigerant").hide();
    $("#second_windows").hide();
    $("#second_water_heater").hide();
    $("#second_kitchen").hide();
    $("#second_notes").hide();

    }
    //First Initial Form
    function second_initialSubmit() {
    $("#second_initialForm").hide();

    unit_type = $("input[name=second_unit_type]:checked").val();
    localStorage.setItem('second_unit_type', unit_type);

    allow = true;
    $("input[name=second_test_name]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_company_name]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_site_address]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_duct_location]").is(":checked") ? nothing = true : allow = false;
    $("input[name=second_email]").val() == '' ? allow = false : nothing = true;
    $("select[name=second_number_of_bedroom] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("input[name=second_unit_type]").is(":checked") ? nothing = true : allow = false;

    if (unit_type == "Package_Unit" && allow) {
        $("#second_packageUnit1").show();
        $("#hersTitle").append(" > Package Unit");

    } else if (unit_type == "Central_Split_AC" && allow) {
        // $("#second_centralSplit").show();
        // $("#hersTitle").append(" > Central Split AC");

        $("#second_centralGas").show();
        $("#hersTitle").append(" > Central Gas Furnace");

    } else if (unit_type == "Heat_Pump" && allow) {
        // $("#second_heatPump").show();
        // $("#hersTitle").append(" > Heat Pump");

        $("#second_airHandler").show();
        $("#hersTitle").append(" > Air Handler");

    } else if (unit_type == "Ductless_Unit" && allow) {
        // $("#second_condenser").show();
        // $("#hersTitle").append(" > Condenser");

        $("#second_indoorUnit").show();
        $("#hersTitle").append(" > Indoor Unit");

    } else {
        alert("Kindly fill all the fields");
        $("#second_initialForm").show();
    }

    }


    // (2)
    function second_packageUnit1_Submit() {
    allow = true;


    fulltime = $("input[name=second_pu_fulltime]:checked").val();
    localStorage.setItem('second_fulltime', fulltime);

    $("input[name=second_pu_fulltime]").is(":checked") ? nothing = true : allow = false;
    $("input[name=second_pu_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_pu_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_pu_serial]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_pu_btu_input]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_pu_btu_output]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_pu_efficiency]").val() == '' ? allow = false : nothing = true;
    $("select[name=second_pu_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("select[name=second_pu_seer] option:selected").val() == "Default" ? allow = false : nothing = true;

    if (allow) {
        $("#second_packageUnit1").hide();
        $("#second_testResult").show();
        $("#hersTitle").append(" > Test Result");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function second_packageUnit1_Back() {
    $("#second_packageUnit1").hide();
    $("#second_initialForm").show();
    second_oneBack();
    }

    // (3)
    function second_centralSplit_Submit() {
    allow = true;

    fulltime = localStorage.getItem('second_fulltime');

    $("input[name=second_cs_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_cs_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_cs_serial]").val() == '' ? allow = false : nothing = true;
    $("select[name=second_cs_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("select[name=second_cs_seer] option:selected").val() == "Default" ? allow = false : nothing = true;


    if (allow) {
        $("#second_centralSplit").hide();
        if (fulltime == 'Yes') {
          $("#second_acCoil").show();
          $("#hersTitle").append(" > acCoil");
        } else {
          $("#second_testResult").show();
          $("#hersTitle").append(" > Test Result");
        }

        // $("#second_centralGas").show();
        // $("#hersTitle").append(" > Central Gas Furnace");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function second_centralSplit_Back() {
    $("#second_centralSplit").hide();
    // $("#second_initialForm").show();
    $("#second_centralGas").show();
    second_oneBack();
    }



    // (4)
    function second_heatPump_Submit() {
    allow = true;

    fulltime = localStorage.getItem('second_fulltime');
    $("input[name=second_heat_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_heat_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_heat_serial]").val() == '' ? allow = false : nothing = true;
    $("select[name=second_heat_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("select[name=second_heat_seer] option:selected").val() == "Default" ? allow = false : nothing = true;


    if (allow) {
        $("#second_heatPump").hide();
        if (fulltime == 'Yes') {
          $("#second_acCoil").show();
          $("#hersTitle").append(" > acCoil");
        } else {
          $("#second_testResult").show();
          $("#hersTitle").append(" > Test Result");
        }

        // $("#second_airHandler").show();
        // $("#hersTitle").append(" > Air Handler");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function second_heatPump_Back() {
    $("#second_heatPump").hide();
    // $("#second_initialForm").show();
    $("#second_airHandler").show();
    second_oneBack();
    }


    // (5)
    function second_centralGas_Submit() {
    allow = true;

    fulltime = $("input[name=second_cg_fulltime]:checked").val();
    localStorage.setItem('second_fulltime', fulltime);




    $("input[name=second_cg_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_cg_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_cg_serial]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_cg_btu_input]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_cg_btu_output]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_cg_efficiency]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_cg_fulltime]").is(":checked") ? nothing = true : allow = false;

    if (allow) {
        $("#second_centralGas").hide();
        $("#second_centralSplit").show();
        $("#hersTitle").append(" > Central Split AC");
        // if (fulltime == 'Yes') {
        // $("#second_acCoil").show();
        // $("#hersTitle").append(" > acCoil");
        // } else {
        // $("#second_testResult").show();
        // $("#hersTitle").append(" > Test Result");
        // }
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function second_centralGas_Back() {
    $("#second_centralGas").hide();
    // $("#second_centralSplit").show();
    $("#second_initialForm").show();
    second_oneBack();
    }

    // (6)
    function second_acCoil_Submit() {
    allow = true;

    $("input[name=second_acc_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_acc_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_acc_serial]").val() == '' ? allow = false : nothing = true;

    if (allow) {
        $("#second_acCoil").hide();
        $("#second_testResult").show();
        $("#hersTitle").append(" > Test Result");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function second_acCoil_Back() {
    $("#second_acCoil").hide();
    $("#second_centralGas").show();
    second_oneBack();
    }



    // (7)
    function second_airHandler_Submit() {
    allow = true;


    fulltime = $("input[name=second_air_fulltime]:checked").val();
    localStorage.setItem('second_fulltime', fulltime);

    $("input[name=second_air_fulltime]").is(":checked") ? nothing = true : allow = false;
    $("input[name=second_air_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_air_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_air_serial]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_air_btu_input]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_air_btu_output]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_air_efficiency]").val() == '' ? allow = false : nothing = true;

    if (allow) {
        $("#second_airHandler").hide();
        // $("#second_testResult").show();
        // $("#hersTitle").append(" > Test Result");

        $("#second_heatPump").show();
        $("#hersTitle").append(" > Heat Pump");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function second_airHandler_Back() {
    $("#second_airHandler").hide();
    // $("#second_heatPump").show();
    $("#second_initialForm").show();
    second_oneBack();
    }


    // (8)
    function second_condenser_Submit() {
    allow = true;

    fulltime = localStorage.getItem('second_fulltime');

    $("input[name=second_con_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_con_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_con_serial]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_con_btu_input]").val() == '' ? allow = false : nothing = true;
    $("select[name=second_con_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("select[name=second_con_seer] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("input[name=second_in_pounds]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_in_ounces]").val() == '' ? allow = false : nothing = true;


    if (allow) {

      if (fulltime == "Yes") {
          $("#second_condenser").hide();
          $("#second_windows").show();
          $("#hersTitle").append(" > Windows");

        }else{
          $("#second_condenser").hide();
          // $("#notes").show();
          // $("#hersTitle").append(" > Notes");
          $("#second_notes").show();
          $("#hersTitle").append(" > Notes");

        }


        // $("#second_condenser").hide();
        // $("#second_indoorUnit").show();
        // $("#hersTitle").append(" > Indoor Unit");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function second_condenser_Back() {
    $("#second_condenser").hide();
    $("#second_indoorUnit").show();
    // $("#second_initialForm").show();
    second_oneBack();
    }

    // (9)
    function second_indoorUnit_Submit() {
    allow = true;

    fulltime = $("input[name=second_in_fulltime]:checked").val();
    localStorage.setItem('second_fulltime', fulltime);

    $("input[name=second_in_fulltime]").is(":checked") ? nothing = true : allow = false;


    $("input[name=second_in_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_in_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_in_serial]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_in_btu_input]").val() == '' ? allow = false : nothing = true;
    $("input[name=second_in_btu_output]").val() == '' ? allow = false : nothing = true;

    if (allow) {
        // if (fulltime == "Yes") {
        // $("#second_indoorUnit").hide();
        // $("#second_windows").show();
        // $("#hersTitle").append(" > Windows");

        // }else{
        // $("#second_indoorUnit").hide();
        // $("#second_notes").show();
        // $("#hersTitle").append(" > Notes");
        // }

        $("#second_indoorUnit").hide();
        // $("#notes").show();
        // $("#hersTitle").append(" > Notes");
        $("#second_condenser").show();
        $("#hersTitle").append(" > Condenser");
    
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function second_indoorUnit_Back() {
    $("#second_indoorUnit").hide();
   
    $("#second_condenser").show();
    $("#second_initialForm").show();
    second_oneBack();
    }



    // (10)
    function second_testResultSubmit() {
    allow = true;
    unit_type = localStorage.getItem('second_unit_type');
    fulltime = localStorage.getItem('second_fulltime');

    $("input[name=second_test_ductLeakage]").is(":checked") ? nothing = true : allow = false;


    if (unit_type == "Package_Unit" && allow) {

        if (fulltime == "Yes") {
        $("#second_testResult").hide();
        $("#second_windows").show();
        $("#hersTitle").append(" > Windows");

        } else {
        $("#second_testResult").hide();
        $("#second_notes").show();
        $("#hersTitle").append(" > Notes");
        }




    } else if (unit_type == "Central_Split_AC" && allow) {
        $("#second_testResult").hide();
        // $("#second_notes").show(); 
        $("#second_refrigerant").show();
        $("#hersTitle").append(" > Refrigerant");
        //$("#hersTitle").append(" > Notes");

    } else if (unit_type == "Heat_Pump" && allow) {
        $("#second_testResult").hide();
        // $("#second_notes").show(); 
        $("#second_refrigerant").show();
        $("#hersTitle").append(" > Refrigerant");
        // $("#hersTitle").append(" > Notes");

    } else if (unit_type == "Ductless_Unit" && allow) {

    }

    }

    function second_testResult_Back() {
    unit_type = localStorage.getItem('second_unit_type');
    fulltime = localStorage.getItem('second_fulltime');
    if (unit_type == "Package_Unit") {
        $("#second_packageUnit1").show();
    } else if (unit_type == "Central_Split_AC" && allow) {
        fulltime == 'Yes' ? $("#second_acCoil").show() : $("#second_centralSplit").show();

    } else if (unit_type == "Heat_Pump" && allow) {
        $("#second_airHandler").show()
    } else if (unit_type == "Ductless_Unit" && allow) {

    }
    $("#second_testResult").hide();
    second_oneBack();
    }


    // (10.1)

    function second_refrigerantSubmit() {
    fulltime = localStorage.getItem('second_fulltime');

    if (fulltime == "Yes") {
        $("#second_refrigerant").hide();
        $("#second_windows").show();
        $("#hersTitle").append(" > Windows");

    } else {
        $("#second_refrigerant").hide();
        $("#second_notes").show();
        $("#hersTitle").append(" > Notes");
    }

    }

    function second_refrigerant_Back() {
    $("#second_refrigerant").hide();
    $("#second_testResult").show();
    second_oneBack();
    }

    // (10.2)

    function second_windowSubmit() {
    $("#second_windows").hide();
    $("#second_water_heater").show();
    $("#hersTitle").append(" > Water Heater");

    }

    function second_window_Back() {

    unit_type = localStorage.getItem('second_unit_type');

    if(unit_type == "Ductless_Unit" ){
        $("#second_windows").hide();
        $("#second_indoorUnit").show();
        oneBack();
        
    }else if (unit_type == "Package_Unit"){
        $("#second_windows").hide();
        $("#second_testResult").show();
        oneBack();
    }else{
        $("#second_windows").hide();
        $("#second_refrigerant").show();
        second_oneBack();
    }
    
    }


    // (10.3)

    function second_waterSubmit() {
    $("#second_water_heater").hide();
    $("#second_kitchen").show();
    $("#hersTitle").append(" > Kitchen Hood");

    }

    function second_water_Back() {
    $("#second_water_heater").hide();
    $("#second_windows").show();
    second_oneBack();
    }


    // (10.4)

    function second_kitchenSubmit() {
    $("#second_kitchen").hide();
    $("#second_notes").show();
    $("#hersTitle").append(" > Notes");

    }

    function second_kitchen_Back() {
    $("#second_kitchen").hide();
    $("#second_water_heater").show();
    second_oneBack();
    }




    //  (11)
    function second_notes_Back() {
    unit_type = localStorage.getItem('second_unit_type');
    if (unit_type == "Ductless_Unit") {
        $("#second_indoorUnit").show();
    } else {
        $("#second_testResult").show();
    }

    $("#second_notes").hide();
    second_oneBack();
    }




    //Clear Initial Form
    function second_initialClear() {
    $("input[name=second_test_name]").val('');
    $("input[name=second_company_name]").val('');
    $("input[name=second_site_address]").val('');
    $("input[name=second_duct_location]").prop('checked', false);
    $("input[name=second_email]").val('');
    $('select[name=second_number_of_bedroom] option[value=Default]').attr('selected', 'selected');
    $("input[name=second_unit_type]").prop('checked', false);
    }

    function second_packageUnit1_Clear() {
    $("input[name=second_pu_manufacturer]").val('');
    $("input[name=second_pu_model]").val('');
    $("input[name=second_pu_serial]").val('');
    $("input[name=second_pu_btu_input]").val('');
    $("input[name=second_pu_btu_output]").val('');
    $("input[name=second_pu_efficiency]").val('');
    $('select[name=second_pu_tonnage] option[value=Default]').attr('selected', 'selected');
    $('select[name=second_pu_seer] option[value=Default]').attr('selected', 'selected');
    }


    function second_centralSplit_Clear() {
    $("input[name=second_cs_manufacturer]").val('');
    $("input[name=second_cs_model]").val('');
    $("input[name=second_cs_serial]").val('');
    $('select[name=second_cs_tonnage] option[value=Default]').attr('selected', 'selected');
    $('select[name=second_cs_seer] option[value=Default]').attr('selected', 'selected');
    }

    function second_heatPump_Clear() {
    $("input[name=second_heat_manufacturer]").val('');
    $("input[name=second_heat_model]").val('');
    $("input[name=second_heat_serial]").val('');
    $('select[name=second_heat_tonnage] option[value=Default]').attr('selected', 'selected');
    $('select[name=second_heat_seer] option[value=Default]').attr('selected', 'selected');
    }





    function second_centralGas_Clear() {
    $("input[name=second_cg_manufacturer]").val('');
    $("input[name=second_cg_model]").val('');
    $("input[name=second_cg_serial]").val('');
    $("input[name=second_cg_btu_input]").val('');
    $("input[name=second_cg_btu_output]").val('');
    $("input[name=second_cg_efficiency]").val('');
    $("input[name=second_cg_fulltime]").prop('checked', false);

    }

    function second_acCoil_Clear() {
    $("input[name=second_acc_manufacturer]").val('');
    $("input[name=second_acc_model]").val('');
    $("input[name=second_acc_serial]").val('');

    }


    function second_airHandler_Clear() {
    $("input[name=second_air_manufacturer]").val('');
    $("input[name=second_air_model]").val('');
    $("input[name=second_air_serial]").val('');
    $("input[name=second_air_btu_input]").val('');
    $("input[name=second_air_btu_output]").val('');
    $("input[name=second_air_efficiency]").val('');

    }

    function second_condenser_Clear() {
    $("input[name=second_con_manufacturer]").val('');
    $("input[name=second_con_model]").val('');
    $("input[name=second_con_serial]").val('');
    $("input[name=second_con_btu_input]").val('');
    $('select[name=second_con_tonnage] option[value=Default]').attr('selected', 'selected');
    $('select[name=second_con_seer] option[value=Default]').attr('selected', 'selected');
    }


    function second_indoorUnit_Clear() {

    $("input[name=second_in_manufacturer]").val('');
    $("input[name=second_in_model]").val('');
    $("input[name=second_in_serial]").val('');
    $("input[name=second_in_btu_input]").val('');
    $("input[name=second_in_btu_output]").val('');
    $("input[name=second_in_pounds]").val('');
    $("input[name=second_in_ounces]").val('');

    }





    function second_testResult_Clear() {
    $("input[name=second_test_fanWatt]").val('');
    $('select[name=second_test_ductLeakage] option[value=Default]').attr('selected', 'selected');
    $("input[name=second_test_duct_leak_result]").val('');
    $("input[name=second_test_cfm1]").val('');
    $("input[name=second_test_location1]").val('');
    $("input[name=second_test_cfm2]").val('');
    $("input[name=second_test_location2]").val('');
    $("input[name=second_test_cfm3]").val('');
    $("input[name=second_test_location3]").val('');
    $("input[name=second_test_cfm4]").val('');
    $("input[name=second_test_location4]").val('');
    $("input[name=second_test_cfm5]").val('');
    $("input[name=second_test_location5]").val('');
    }


    function second_notes_Clear() {
    $("input[name=second_notes]").val('');
    }
    function second_oneBack() {
    title = $("#hersTitle").html();
    title = title.substr(0, title.lastIndexOf('&gt;') - 1);
    $("#hersTitle").html(title);
    }




</script>



<!-- Third Script -->

<script>


        
    unit_type = "";
    third_hideAll()
    function third_hideAll() {
    $("#third_packageUnit1").hide();
    $("#third_centralSplit").hide();
    $("#third_heatPump").hide();
    $("#third_centralGas").hide();
    $("#third_acCoil").hide();
    $("#third_airHandler").hide();
    $("#third_condenser").hide();
    $("#third_indoorUnit").hide();
    $("#third_testResult").hide();
    $("#third_refrigerant").hide();
    $("#third_windows").hide();
    $("#third_water_heater").hide();
    $("#third_kitchen").hide();
    $("#third_notes").hide();

    }
    //First Initial Form
    function third_initialSubmit() {
    $("#third_initialForm").hide();

    unit_type = $("input[name=third_unit_type]:checked").val();
    localStorage.setItem('third_unit_type', unit_type);

    allow = true;
    $("input[name=third_test_name]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_company_name]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_site_address]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_duct_location]").is(":checked") ? nothing = true : allow = false;
    $("input[name=third_email]").val() == '' ? allow = false : nothing = true;
    $("select[name=third_number_of_bedroom] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("input[name=third_unit_type]").is(":checked") ? nothing = true : allow = false;

    if (unit_type == "Package_Unit" && allow) {
        $("#third_packageUnit1").show();
        $("#hersTitle").append(" > Package Unit");

    } else if (unit_type == "Central_Split_AC" && allow) {
        // $("#third_centralSplit").show();
        // $("#hersTitle").append(" > Central Split AC");

        $("#third_centralGas").show();
        $("#hersTitle").append(" > Central Gas Furnace");

    } else if (unit_type == "Heat_Pump" && allow) {
        // $("#third_heatPump").show();
        // $("#hersTitle").append(" > Heat Pump");

        $("#third_airHandler").show();
        $("#hersTitle").append(" > Air Handler");

    } else if (unit_type == "Ductless_Unit" && allow) {
        // $("#third_condenser").show();
        // $("#hersTitle").append(" > Condenser");

        $("#third_indoorUnit").show();
        $("#hersTitle").append(" > Indoor Unit");

    } else {
        alert("Kindly fill all the fields");
        $("#third_initialForm").show();
    }

    }


    // (2)
    function third_packageUnit1_Submit() {
    allow = true;


    fulltime = $("input[name=third_pu_fulltime]:checked").val();
    localStorage.setItem('third_fulltime', fulltime);

    $("input[name=third_pu_fulltime]").is(":checked") ? nothing = true : allow = false;
    $("input[name=third_pu_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_pu_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_pu_serial]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_pu_btu_input]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_pu_btu_output]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_pu_efficiency]").val() == '' ? allow = false : nothing = true;
    $("select[name=third_pu_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("select[name=third_pu_seer] option:selected").val() == "Default" ? allow = false : nothing = true;

    if (allow) {
        $("#third_packageUnit1").hide();
        $("#third_testResult").show();
        $("#hersTitle").append(" > Test Result");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function third_packageUnit1_Back() {
    $("#third_packageUnit1").hide();
    $("#third_initialForm").show();
    third_oneBack();
    }

    // (3)
    function third_centralSplit_Submit() {
    allow = true;

    fulltime = localStorage.getItem('fulltime');
    $("input[name=third_cs_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_cs_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_cs_serial]").val() == '' ? allow = false : nothing = true;
    $("select[name=third_cs_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("select[name=third_cs_seer] option:selected").val() == "Default" ? allow = false : nothing = true;


    if (allow) {
        $("#third_centralSplit").hide();
        // $("#third_centralGas").show();
        // $("#hersTitle").append(" > Central Gas Furnace");

        if (fulltime == 'Yes') {
          $("#third_acCoil").show();
          $("#hersTitle").append(" > acCoil");
        } else {
          $("#third_testResult").show();
          $("#hersTitle").append(" > Test Result");
        }
        
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function third_centralSplit_Back() {
    $("#third_centralSplit").hide();
    // $("#third_initialForm").show();
    $("#third_centralGas").show();
    third_oneBack();
    }



    // (4)
    function third_heatPump_Submit() {
    allow = true;

    fulltime = localStorage.getItem('fulltime');

    $("input[name=third_heat_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_heat_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_heat_serial]").val() == '' ? allow = false : nothing = true;
    $("select[name=third_heat_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("select[name=third_heat_seer] option:selected").val() == "Default" ? allow = false : nothing = true;


    if (allow) {
        $("#third_heatPump").hide();

        if (fulltime == 'Yes') {
          $("#third_acCoil").show();
          $("#hersTitle").append(" > acCoil");
        } else {
          $("#third_testResult").show();
          $("#hersTitle").append(" > Test Result");
        }

        // $("#third_airHandler").show();
        // $("#hersTitle").append(" > Air Handler");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function third_heatPump_Back() {
    $("#third_heatPump").hide();
    // $("#third_initialForm").show();
    $("#third_airHandler").show();
    third_oneBack();
    }


    // (5)
    function third_centralGas_Submit() {
    allow = true;

    fulltime = $("input[name=third_cg_fulltime]:checked").val();
    localStorage.setItem('third_fulltime', fulltime);




    $("input[name=third_cg_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_cg_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_cg_serial]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_cg_btu_input]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_cg_btu_output]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_cg_efficiency]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_cg_fulltime]").is(":checked") ? nothing = true : allow = false;

    if (allow) {
        $("#third_centralGas").hide();
        $("#third_centralSplit").show();
        $("#hersTitle").append(" > Central Split AC");

        // if (fulltime == 'Yes') {
        // $("#third_acCoil").show();
        // $("#hersTitle").append(" > acCoil");
        // } else {
        // $("#third_testResult").show();
        // $("#hersTitle").append(" > Test Result");
        // }
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function third_centralGas_Back() {
    $("#third_centralGas").hide();
    // $("#third_centralSplit").show();
    $("#third_initialForm").show();
    third_oneBack();
    }

    // (6)
    function third_acCoil_Submit() {
    allow = true;

    $("input[name=third_acc_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_acc_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_acc_serial]").val() == '' ? allow = false : nothing = true;

    if (allow) {
        $("#third_acCoil").hide();
        $("#third_testResult").show();
        $("#hersTitle").append(" > Test Result");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function third_acCoil_Back() {
    $("#third_acCoil").hide();
    // $("#third_centralGas").show();
    $("#third_centralSplit").show();
    third_oneBack();
    }



    // (7)
    function third_airHandler_Submit() {
    allow = true;


    fulltime = $("input[name=third_air_fulltime]:checked").val();
    localStorage.setItem('third_fulltime', fulltime);

    $("input[name=third_air_fulltime]").is(":checked") ? nothing = true : allow = false;
    $("input[name=third_air_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_air_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_air_serial]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_air_btu_input]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_air_btu_output]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_air_efficiency]").val() == '' ? allow = false : nothing = true;

    if (allow) {
        $("#third_airHandler").hide();
        // $("#third_testResult").show();
        // $("#hersTitle").append(" > Test Result");

        $("#third_heatPump").show();
        $("#hersTitle").append(" > Heat Pump");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function third_airHandler_Back() {
    $("#third_airHandler").hide();
    // $("#third_heatPump").show();
    $("#third_initialForm").show();
    third_oneBack();
    }


    // (8)
    function third_condenser_Submit() {
    allow = true;


    fulltime = localStorage.getItem('third_fulltime');

    $("input[name=third_con_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_con_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_con_serial]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_con_btu_input]").val() == '' ? allow = false : nothing = true;
    $("select[name=third_con_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("select[name=third_con_seer] option:selected").val() == "Default" ? allow = false : nothing = true;
    $("input[name=third_in_pounds]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_in_ounces]").val() == '' ? allow = false : nothing = true;


    if (allow) {
        // $("#third_condenser").hide();
        // $("#third_indoorUnit").show();
        // $("#hersTitle").append(" > Indoor Unit");

        if (fulltime == "Yes") {
          $("#third_condenser").hide();
          $("#third_windows").show();
          $("#hersTitle").append(" > Windows");

        }else{
          $("#third_condenser").hide();
          // $("#notes").show();
          // $("#hersTitle").append(" > Notes");
          $("#third_notes").show();
          $("#hersTitle").append(" > Notes");

        }


    } else {
        alert("Kindly fill all the fields");
    }
    }

    function third_condenser_Back() {
    $("#third_condenser").hide();
    $("#third_indoorUnit").show();
    // $("#third_initialForm").show();
    third_oneBack();
    }

    // (9)
    function third_indoorUnit_Submit() {
    allow = true;

    fulltime = $("input[name=third_in_fulltime]:checked").val();
    localStorage.setItem('third_fulltime', fulltime);

    $("input[name=third_in_fulltime]").is(":checked") ? nothing = true : allow = false;


    $("input[name=third_in_manufacturer]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_in_model]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_in_serial]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_in_btu_input]").val() == '' ? allow = false : nothing = true;
    $("input[name=third_in_btu_output]").val() == '' ? allow = false : nothing = true;

    if (allow) {
        // if (fulltime == "Yes") {
        // $("#third_indoorUnit").hide();
        // $("#third_windows").show();
        // $("#hersTitle").append(" > Windows");

        // }else{
        // $("#third_indoorUnit").hide();
        // $("#third_notes").show();
        // $("#hersTitle").append(" > Notes");
        // }
    
        $("#third_indoorUnit").hide();
        // $("#notes").show();
        // $("#hersTitle").append(" > Notes");
        $("#third_condenser").show();
        $("#hersTitle").append(" > Condenser");
    } else {
        alert("Kindly fill all the fields");
    }
    }

    function third_indoorUnit_Back() {
    $("#third_indoorUnit").hide();
    // $("#third_condenser").show();
    $("#third_initialForm").show();
    third_oneBack();
    }



    // (10)
    function third_testResultSubmit() {
    allow = true;
    unit_type = localStorage.getItem('third_unit_type');
    fulltime = localStorage.getItem('third_fulltime');

    $("input[name=third_test_ductLeakage]").is(":checked") ? nothing = true : allow = false;


    if (unit_type == "Package_Unit" && allow) {

        if (fulltime == "Yes") {
        $("#third_testResult").hide();
        $("#third_windows").show();
        $("#hersTitle").append(" > Windows");

        } else {
        $("#third_testResult").hide();
        $("#third_notes").show();
        $("#hersTitle").append(" > Notes");
        }




    } else if (unit_type == "Central_Split_AC" && allow) {
        $("#third_testResult").hide();
        // $("#third_notes").show(); 
        $("#third_refrigerant").show();
        $("#hersTitle").append(" > Refrigerant");
        //$("#hersTitle").append(" > Notes");

    } else if (unit_type == "Heat_Pump" && allow) {
        $("#third_testResult").hide();
        // $("#third_notes").show(); 
        $("#third_refrigerant").show();
        $("#hersTitle").append(" > Refrigerant");
        // $("#hersTitle").append(" > Notes");

    } else if (unit_type == "Ductless_Unit" && allow) {

    }

    }

    function third_testResult_Back() {
    unit_type = localStorage.getItem('third_unit_type');
    fulltime = localStorage.getItem('third_fulltime');
    if (unit_type == "Package_Unit") {
        $("#third_packageUnit1").show();
    } else if (unit_type == "Central_Split_AC" && allow) {
        fulltime == 'Yes' ? $("#third_acCoil").show() : $("#third_centralSplit").show();

    } else if (unit_type == "Heat_Pump" && allow) {
        $("#third_airHandler").show()
    } else if (unit_type == "Ductless_Unit" && allow) {

    }
    $("#third_testResult").hide();
    third_oneBack();
    }


    // (10.1)

    function third_refrigerantSubmit() {
    fulltime = localStorage.getItem('third_fulltime');

    if (fulltime == "Yes") {
        $("#third_refrigerant").hide();
        $("#third_windows").show();
        $("#hersTitle").append(" > Windows");

    } else {
        $("#third_refrigerant").hide();
        $("#third_notes").show();
        $("#hersTitle").append(" > Notes");
    }

    }

    function third_refrigerant_Back() {
    $("#third_refrigerant").hide();
    $("#third_testResult").show();
    third_oneBack();
    }

    // (10.2)

    function third_windowSubmit() {
    $("#third_windows").hide();
    $("#third_water_heater").show();
    $("#hersTitle").append(" > Water Heater");

    }

    function third_window_Back() {

    unit_type = localStorage.getItem('third_unit_type');

    if(unit_type == "Ductless_Unit" ){
        $("#third_windows").hide();
        $("#third_indoorUnit").show();
        oneBack();
        
    }else if (unit_type == "Package_Unit"){
        $("#third_windows").hide();
        $("#third_testResult").show();
        oneBack();
    }else{
        $("#third_windows").hide();
        $("#third_refrigerant").show();
        third_oneBack();
    }
    
    }


    // (10.3)

    function third_waterSubmit() {
    $("#third_water_heater").hide();
    $("#third_kitchen").show();
    $("#hersTitle").append(" > Kitchen Hood");

    }

    function third_water_Back() {
    $("#third_water_heater").hide();
    $("#third_windows").show();
    third_oneBack();
    }


    // (10.4)

    function third_kitchenSubmit() {
    $("#third_kitchen").hide();
    $("#third_notes").show();
    $("#hersTitle").append(" > Notes");

    }

    function third_kitchen_Back() {
    $("#third_kitchen").hide();
    $("#third_water_heater").show();
    third_oneBack();
    }




    //  (11)
    function third_notes_Back() {
    unit_type = localStorage.getItem('third_unit_type');
    if (unit_type == "Ductless_Unit") {
        $("#third_indoorUnit").show();
    } else {
        $("#third_testResult").show();
    }

    $("#third_notes").hide();
    third_oneBack();
    }




    //Clear Initial Form
    function third_initialClear() {
    $("input[name=third_test_name]").val('');
    $("input[name=third_company_name]").val('');
    $("input[name=third_site_address]").val('');
    $("input[name=third_duct_location]").prop('checked', false);
    $("input[name=third_email]").val('');
    $('select[name=third_number_of_bedroom] option[value=Default]').attr('selected', 'selected');
    $("input[name=third_unit_type]").prop('checked', false);
    }

    function third_packageUnit1_Clear() {
    $("input[name=third_pu_manufacturer]").val('');
    $("input[name=third_pu_model]").val('');
    $("input[name=third_pu_serial]").val('');
    $("input[name=third_pu_btu_input]").val('');
    $("input[name=third_pu_btu_output]").val('');
    $("input[name=third_pu_efficiency]").val('');
    $('select[name=third_pu_tonnage] option[value=Default]').attr('selected', 'selected');
    $('select[name=third_pu_seer] option[value=Default]').attr('selected', 'selected');
    }


    function third_centralSplit_Clear() {
    $("input[name=third_cs_manufacturer]").val('');
    $("input[name=third_cs_model]").val('');
    $("input[name=third_cs_serial]").val('');
    $('select[name=third_cs_tonnage] option[value=Default]').attr('selected', 'selected');
    $('select[name=third_cs_seer] option[value=Default]').attr('selected', 'selected');
    }

    function third_heatPump_Clear() {
    $("input[name=third_heat_manufacturer]").val('');
    $("input[name=third_heat_model]").val('');
    $("input[name=third_heat_serial]").val('');
    $('select[name=third_heat_tonnage] option[value=Default]').attr('selected', 'selected');
    $('select[name=third_heat_seer] option[value=Default]').attr('selected', 'selected');
    }





    function third_centralGas_Clear() {
    $("input[name=third_cg_manufacturer]").val('');
    $("input[name=third_cg_model]").val('');
    $("input[name=third_cg_serial]").val('');
    $("input[name=third_cg_btu_input]").val('');
    $("input[name=third_cg_btu_output]").val('');
    $("input[name=third_cg_efficiency]").val('');
    $("input[name=third_cg_fulltime]").prop('checked', false);

    }

    function third_acCoil_Clear() {
    $("input[name=third_acc_manufacturer]").val('');
    $("input[name=third_acc_model]").val('');
    $("input[name=third_acc_serial]").val('');

    }


    function third_airHandler_Clear() {
    $("input[name=third_air_manufacturer]").val('');
    $("input[name=third_air_model]").val('');
    $("input[name=third_air_serial]").val('');
    $("input[name=third_air_btu_input]").val('');
    $("input[name=third_air_btu_output]").val('');
    $("input[name=third_air_efficiency]").val('');

    }

    function third_condenser_Clear() {
    $("input[name=third_con_manufacturer]").val('');
    $("input[name=third_con_model]").val('');
    $("input[name=third_con_serial]").val('');
    $("input[name=third_con_btu_input]").val('');
    $('select[name=third_con_tonnage] option[value=Default]').attr('selected', 'selected');
    $('select[name=third_con_seer] option[value=Default]').attr('selected', 'selected');
    }


    function third_indoorUnit_Clear() {

    $("input[name=third_in_manufacturer]").val('');
    $("input[name=third_in_model]").val('');
    $("input[name=third_in_serial]").val('');
    $("input[name=third_in_btu_input]").val('');
    $("input[name=third_in_btu_output]").val('');
    $("input[name=third_in_pounds]").val('');
    $("input[name=third_in_ounces]").val('');

    }





    function third_testResult_Clear() {
    $("input[name=third_test_fanWatt]").val('');
    $('select[name=third_test_ductLeakage] option[value=Default]').attr('selected', 'selected');
    $("input[name=third_test_duct_leak_result]").val('');
    $("input[name=third_test_cfm1]").val('');
    $("input[name=third_test_location1]").val('');
    $("input[name=third_test_cfm2]").val('');
    $("input[name=third_test_location2]").val('');
    $("input[name=third_test_cfm3]").val('');
    $("input[name=third_test_location3]").val('');
    $("input[name=third_test_cfm4]").val('');
    $("input[name=third_test_location4]").val('');
    $("input[name=third_test_cfm5]").val('');
    $("input[name=third_test_location5]").val('');
    }


    function third_notes_Clear() {
    $("input[name=third_notes]").val('');
    }
    function third_oneBack() {
    title = $("#hersTitle").html();
    title = title.substr(0, title.lastIndexOf('&gt;') - 1);
    $("#hersTitle").html(title);
    }




</script>




<script>

setTimeout(function(){ 
  $("#sidebar ul li").removeClass("active")
$("#sidebar ul li:nth-child(2)").addClass("active")

}, 1000);
</script>
  
</body>

</html>