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
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:<?php echo base_url(); ?>asset/partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html">
        Hers Test
        <!-- <img src="<?php echo base_url(); ?>asset/images/logo.svg" class="mr-2" alt="logo"/> -->
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
        Hers
        <!-- <img src="<?php echo base_url(); ?>asset/images/logo-mini.svg" alt="logo"/> -->
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button> -->
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <!-- <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span> -->
              </div>
              <h4><strong> HERS TEST SYSTEM</strong></h4>
              <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> -->
            </div>
          </li>
        </ul>
      
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    
      <!-- partial -->
      <!-- partial:<?php echo base_url(); ?>asset/partials/_sidebar.html -->
       <!-- include('sidebar.php'); ?> -->
      <!-- partial -->
      <div class="main-panel" style="width: 100%; padding-right: 15%; padding-left:15%; background: #F5F7FF;">        
        <div class="content-wrapper">
          <div class="row">
            <!-- <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Horizontal Form</h4>
                  <p class="card-description">
                    Horizontal form layout
                  </p>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div> -->


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title" id="hersTitle">HERS Test</h4>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->

                  
                  <form class="forms-sample" method="post" action="<?php echo base_url();?>form/create" enctype="multipart/form-data">

<div class="row" id="initialForm">
  <div class="col-md-6">
    <div class="form-group">
        <label>Test Name*</label>
        <input type="text" class="form-control" name="test_name" placeholder="Test Name" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6" style="display: none;">
    <div class="form-group">
        <label>URL*</label>
        <input type="text" class="form-control" name="url" placeholder="url " value="HersTest-form" >
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
  </div><!-- col-md-6 End-->



  <div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-12">Duct Location*</label>
        <div class="form-check col-sm-3 offset-sm-1">
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
      <h3 >Package Unit</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label>Manufacturer *</label>
        <input type="text" class="form-control" name="pu_manufacturer" placeholder="Manufacturer" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Model Number *</label>
        <input type="text" class="form-control" name="pu_model" placeholder="Model Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Serial Number *</label>
        <input type="text" class="form-control" name="pu_serial" placeholder="Serial Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>BTU Input *</label>
        <input type="text" class="form-control" name="pu_btu_input" placeholder="BTU Input" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>BTU Output *</label>
        <input type="text" class="form-control" name="pu_btu_output" placeholder="BTU Output" >
    </div>
  </div><!-- col-md-6 End-->



  <div class="col-md-6">
    <div class="form-group">
        <label>Efficiency *</label>
        <input type="text" class="form-control" name="pu_efficiency" placeholder="Efficiency" >
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
    <button type="button" class="btn btn-light float-right" onclick="packageUnit1_Clear()">Clear Form</button>

  </div>

</div>



<!-- Package Unit 1 (2) End -->


 <!-- Central Split AC (3) Start -->


<div class="row" id="centralSplit">
  <div class="col-md-12">
    <div class="headingForm">
      <h3 >Central Split AC</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label>Manufacturer *</label>
        <input type="text" class="form-control" name="cs_manufacturer" placeholder="Manufacturer" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Model Number *</label>
        <input type="text" class="form-control" name="cs_model" placeholder="Model Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Serial Number *</label>
        <input type="text" class="form-control" name="cs_serial" placeholder="Serial Number" >
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
    <button type="button" class="btn btn-light float-right" onclick="centralSplit_Clear()">Clear Form</button>

  </div>

</div>


<!-- Central Split AC (3) End -->


<!-- Heat Pump (4) Start -->


<div class="row" id="heatPump">
  <div class="col-md-12">
    <div class="headingForm">
      <h3 >Heat Pump</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label>Manufacturer *</label>
        <input type="text" class="form-control" name="heat_manufacturer" placeholder="Manufacturer" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Model Number *</label>
        <input type="text" class="form-control" name="heat_model" placeholder="Model Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Serial Number *</label>
        <input type="text" class="form-control" name="heat_serial" placeholder="Serial Number" >
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
    <button type="button" class="btn btn-light float-right" onclick="heatPump_Clear()">Clear Form</button>

  </div>

</div>


<!-- Heat Pump (4) End -->



<!-- Central Gas Furnace (5) Start -->

<div class="row" id="centralGas">
  <div class="col-md-12">
    <div class="headingForm">
      <h3 >Central Gas Furnace</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label>Manufacturer *</label>
        <input type="text" class="form-control" name="cg_manufacturer" placeholder="Manufacturer" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Model Number *</label>
        <input type="text" class="form-control" name="cg_model" placeholder="Model Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Serial Number *</label>
        <input type="text" class="form-control" name="cg_serial" placeholder="Serial Number" >
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
        <label>BTU Input *</label>
        <input type="text" class="form-control" name="cg_btu_input" placeholder="BTU Input" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>BTU Output *</label>
        <input type="text" class="form-control" name="cg_btu_output" placeholder="BTU Output" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Efficiency *</label>
        <input type="text" class="form-control" name="cg_efficiency" placeholder="Efficiency" >
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
    <button type="button" class="btn btn-light float-right" onclick="centralGas_Clear()">Clear Form</button>

  </div>

</div>

<!-- Central Gas Furnace (5) End -->



<!-- AC Coil (6) Start -->

<div class="row" id="acCoil">
  <div class="col-md-12">
    <div class="headingForm">
      <h3 >AC Coil</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label>Manufacturer *</label>
        <input type="text" class="form-control" name="acc_manufacturer" placeholder="Manufacturer" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Model Number *</label>
        <input type="text" class="form-control" name="acc_model" placeholder="Model Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Serial Number *</label>
        <input type="text" class="form-control" name="acc_serial" placeholder="Serial Number" >
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
      <h3 >Air Handler</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label>Manufacturer *</label>
        <input type="text" class="form-control" name="air_manufacturer" placeholder="Manufacturer" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Model Number *</label>
        <input type="text" class="form-control" name="air_model" placeholder="Model Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Serial Number *</label>
        <input type="text" class="form-control" name="air_serial" placeholder="Serial Number" >
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
        <label>BTU Input *</label>
        <input type="text" class="form-control" name="air_btu_input" placeholder="BTU Input" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>BTU Output *</label>
        <input type="text" class="form-control" name="air_btu_output" placeholder="BTU Output" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Efficiency *</label>
        <input type="text" class="form-control" name="air_efficiency" placeholder="Efficiency" >
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
    <button type="button" class="btn btn-light float-right" onclick="airHandler_Clear()">Clear Form</button>

  </div>

</div>

<!-- Central Air Handler (7) End -->

<!--Condenser (8) Start -->

<div class="row" id="condenser">
  <div class="col-md-12">
    <div class="headingForm">
      <h3 >Condenser</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label>Manufacturer *</label>
        <input type="text" class="form-control" name="con_manufacturer" placeholder="Manufacturer" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Model Number *</label>
        <input type="text" class="form-control" name="con_model" placeholder="Model Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Serial Number *</label>
        <input type="text" class="form-control" name="con_serial" placeholder="Serial Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>BTU Input *</label>
        <input type="text" class="form-control" name="con_btu_input" placeholder="BTU Input" >
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
    <button type="button" class="btn btn-light float-right" onclick="condenser_Clear()">Clear Form</button>

  </div>

</div>



<!-- Condenser (8) End -->


<!--Indoor Unit (9) Start -->

<div class="row" id="indoorUnit">
  <div class="col-md-12">
    <div class="headingForm">
      <h3 >Indoor Unit</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label>Manufacturer *</label>
        <input type="text" class="form-control" name="in_manufacturer" placeholder="Manufacturer" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Model Number *</label>
        <input type="text" class="form-control" name="in_model" placeholder="Model Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Serial Number *</label>
        <input type="text" class="form-control" name="in_serial" placeholder="Serial Number" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>BTU Input *</label>
        <input type="text" class="form-control" name="in_btu_input" placeholder="BTU Input" >
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
        <label>BTU Output *</label>
        <input type="text" class="form-control" name="in_btu_output" placeholder="BTU Output" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Pounds *</label>
        <input type="text" class="form-control" name="in_pounds" placeholder="Pounds" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>Ounces *</label>
        <input type="text" class="form-control" name="in_ounces" placeholder="BTU Ounces" >
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
    <button type="button" class="btn btn-light float-right" onclick="indoorUnit_Clear()">Clear Form</button>

  </div>

</div>



<!-- Indoor Unit (9) End -->


<!-- Test Result 10 Start -->

<div class="row" id="testResult">
  <div class="col-md-12">
    <div class="headingForm">
      <h3 >Test Result</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label>Duct Leakage CFM Result</label>
        <input type="text" class="form-control" name="test_duct_leak_result" placeholder="Duct Leakage CFM Result" >
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
              <input type="radio" class="form-check-input" name="test_ductLeakage" value="15%_Story">
              15% (2 Story)
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
              <input type="radio" class="form-check-input" name="test_ductLeakage" value="Exempt_Asbestos">
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
        <input type="text" class="form-control" name="test_fanWatt" placeholder="Fan Watt Draw" >
    </div>
  </div><!-- col-md-6 End-->
  

  <div class="col-md-6">
    <div class="form-group">
        <label>CFM (Return 1) </label>
        <input type="text" class="form-control" name="test_cfm1" placeholder="CFM (Return 1)" >
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
        <label>Location (Return 1) </label>
        <input type="text" class="form-control" name="test_location1" placeholder="Location (Return 1)" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>CFM (Return 2)</label>
        <input type="text" class="form-control" name="test_cfm2" placeholder="CFM (Return 2)" >
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
        <label>Location (Return 2)</label>
        <input type="text" class="form-control" name="test_location2" placeholder="Location (Return 2)" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>CFM (Return 3)</label>
        <input type="text" class="form-control" name="test_cfm3" placeholder="CFM (Return 3)" >
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
        <label>Location (Return 3)</label>
        <input type="text" class="form-control" name="test_location3" placeholder="Location (Return 3)" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>CFM (Return 4)</label>
        <input type="text" class="form-control" name="test_cfm4" placeholder="CFM (Return 4)" >
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
        <label>Location (Return 4)</label>
        <input type="text" class="form-control" name="test_location4" placeholder="Location (Return 4)" >
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
        <label>CFM (Return 5)</label>
        <input type="text" class="form-control" name="test_cfm5" placeholder="CFM (Return 5)" >
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
        <label>Location (Return 5)</label>
        <input type="text" class="form-control" name="test_location5" placeholder="Location (Return 5)" >
    </div>
  </div><!-- col-md-6 End-->



  <div class="col-md-12">
  <button type="button" class="btn btn-primary mr-2" onclick="testResult_Back()">Back</button>

    <button type="button" class="btn btn-primary mr-2" onclick="testResultSubmit()">Next</button>
    <button type="button" class="btn btn-light float-right" onclick="testResult_Clear()">Clear Form</button>

  </div>

  

</div>

<!-- Test Result 10 End -->


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
        <input type="text" class="form-control" name="notes" placeholder="Notes" >
    </div>
  </div><!-- col-md-6 End-->



  <div class="col-md-12">
  <button type="button" class="btn btn-primary mr-2" onclick="notes_Back()">Back</button>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button type="button" class="btn btn-light float-right" onclick="notes_Clear()">Clear Form</button>

  </div>


</div>




<!-- Notes 11 End -->

  



<!-- 
<div class="form-group">
    <label for="exampleInputName1">Some</label>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
          Default
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked>
          Selected
        </label>
      </div>                         
</div>


<div class="form-group">
  <label for="exampleInputEmail3">Email address</label>
  <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
</div>
<div class="form-group">
  <label for="exampleInputPassword4">Password</label>
  <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
</div>
<div class="form-group">
  <label for="exampleSelectGender">Gender</label>
    <select class="form-control" id="exampleSelectGender">
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
<div class="form-group">
  <label>File upload</label>
  <input type="file" name="img[]" class="file-upload-default">
  <div class="input-group col-xs-12">
    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
    <span class="input-group-append">
      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
    </span>
  </div>
</div>
<div class="form-group">
  <label for="exampleInputCity1">City</label>
  <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
</div>
<div class="form-group">
  <label for="exampleTextarea1">Textarea</label>
  <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
</div> -->

</form>




                </div>
              </div>
            </div>



            <!-- <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input size</h4>
                  <p class="card-description">
                    Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.
                  </p>
                  <div class="form-group">
                    <label>Large input</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                  </div>
                  <div class="form-group">
                    <label>Default input</label>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                  </div>
                  <div class="form-group">
                    <label>Small input</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Select size</h4>
                  <p class="card-description">
                    Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.                    
                  </p>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Large select</label>
                    <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Default select</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect3">Small select</label>
                    <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic input groups</h4>
                  <p class="card-description">
                    Basic bootstrap input groups
                  </p>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white">$</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <div class="input-group-prepend">
                        <span class="input-group-text">0.00</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" type="button">Search</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Find in facebook" aria-label="Recipient's username">
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-facebook" type="button">
                          <i class="ti-facebook"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Checkbox Controls</h4>
                  <p class="card-description">Checkbox and radio controls (default appearance is in primary color)</p>
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              Default
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked>
                              Checked
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" disabled>
                              Disabled
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" disabled checked>
                              Disabled checked
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                              Default
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                              Selected
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" value="option3" disabled>
                              Disabled
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadio2" id="optionsRadios4" value="option4" disabled checked>
                              Selected and disabled
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-body">
                  <p class="card-description">Add class <code>.form-check-{color}</code> for checkbox and radio controls in theme colors</p>
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked>
                              Primary
                            </label>
                          </div>
                          <div class="form-check form-check-success">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked>
                              Success
                            </label>
                          </div>
                          <div class="form-check form-check-info">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked>
                              Info
                            </label>
                          </div>
                          <div class="form-check form-check-danger">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked>
                              Danger
                            </label>
                          </div>
                          <div class="form-check form-check-warning">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked>
                              Warning
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked>
                              Primary
                            </label>
                          </div>
                          <div class="form-check form-check-success">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio2" id="ExampleRadio2" checked>
                              Success
                            </label>
                          </div>
                          <div class="form-check form-check-info">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio3" id="ExampleRadio3" checked>
                              Info
                            </label>
                          </div>
                          <div class="form-check form-check-danger">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio4" id="ExampleRadio4" checked>
                              Danger
                            </label>
                          </div>
                          <div class="form-check form-check-warning">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio5" id="ExampleRadio5" checked>
                              Warning
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Inline forms</h4>
                  <p class="card-description">
                    Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row
                  </p>
                  <form class="form-inline">
                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                  
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                    </div>
                    <div class="form-check mx-sm-2">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked>
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Horizontal Two column</h4>
                  <form class="form-sample">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Category1</option>
                              <option>Category2</option>
                              <option>Category3</option>
                              <option>Category4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Membership</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                                Free
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                Professional
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Address
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 1</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 2</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postcode</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>America</option>
                              <option>Italy</option>
                              <option>Russia</option>
                              <option>Britain</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Select 2</h4>
                  <div class="form-group">
                    <label>Single select box using select 2</label>
                    <select class="js-example-basic-single w-100">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>
                      <option value="CA">Canada</option>
                      <option value="RU">Russia</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Multiple select using select 2</label>
                    <select class="js-example-basic-multiple w-100" multiple="multiple">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>
                      <option value="CA">Canada</option>
                      <option value="RU">Russia</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Typeahead</h4>
                  <p class="card-description">
                    A simple suggestion engine
                  </p>
                  <div class="form-group row">
                    <div class="col">
                      <label>Basic</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" placeholder="States of USA">
                      </div>
                    </div>
                    <div class="col">
                      <label>Bloodhound</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" placeholder="States of USA">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
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
  function hideAll(){
    $("#packageUnit1").hide();
    $("#centralSplit").hide();
    $("#heatPump").hide();
    $("#centralGas").hide();
    $("#acCoil").hide();
    $("#airHandler").hide();
    $("#condenser").hide();
    $("#indoorUnit").hide();
    $("#testResult").hide();
    $("#notes").hide();
    
  }
  //First Initial Form
  function initialSubmit(){
    $("#initialForm").hide();

    unit_type = $("input[name=unit_type]:checked").val();
    localStorage.setItem('unit_type', unit_type);

      allow = true;
       $("input[name=test_name]").val() == '' ? allow = false : nothing= true  ;
       $("input[name=company_name]").val() == '' ? allow = false : nothing= true ;
       $("input[name=site_address]").val() == '' ? allow = false : nothing= true  ;
       $("input[name=duct_location]").is(":checked") ?  nothing= true : allow = false ;
       $("input[name=email]").val() == '' ? allow = false : nothing= true ;
       $("select[name=number_of_bedroom] option:selected").val() == "Default" ? allow = false : nothing= true  ;
       $("input[name=unit_type]").is(":checked") ? nothing= true  : allow = false ;
      
    if(unit_type == "Package_Unit" && allow){
        $("#packageUnit1").show();
        $("#hersTitle").append(" > Package Unit");
        
    }else if(unit_type == "Central_Split_AC"  && allow){
        $("#centralSplit").show();
        $("#hersTitle").append(" > Central Split AC");     

    }else if(unit_type == "Heat_Pump"  && allow){
        $("#heatPump").show();
        $("#hersTitle").append(" > Heat Pump"); 

    }else  if(unit_type == "Ductless_Unit"  && allow){
        $("#condenser").show();
        $("#hersTitle").append(" > Condenser"); 
      
    }else{
      alert("Kindly fill all the fields");
      $("#initialForm").show();
    }

  }


// (2)
  function packageUnit1_Submit(){
    allow = true;

     $("input[name=pu_manufacturer]").val() == '' ? allow = false : nothing= true ;
     $("input[name=pu_model]").val() == '' ? allow = false : nothing= true ;
     $("input[name=pu_serial]").val() == '' ? allow = false : nothing= true ;
     $("input[name=pu_btu_input]").val() == '' ? allow = false : nothing= true ;
     $("input[name=pu_btu_output]").val() == '' ? allow = false : nothing= true ;
     $("input[name=pu_efficiency]").val() == '' ? allow = false : nothing= true ;
     $("select[name=pu_tonnage] option:selected").val() == "Default" ? allow = false : nothing= true ;
     $("select[name=pu_seer] option:selected").val() == "Default" ? allow = false : nothing= true ;

    if(allow){
      $("#packageUnit1").hide();
      $("#testResult").show();
      $("#hersTitle").append(" > Test Result");
    }else{
      alert("Kindly fill all the fields");
    }
  }

  function packageUnit1_Back(){
    $("#packageUnit1").hide();
    $("#initialForm").show();   
    oneBack(); 
  }

  // (3)
  function centralSplit_Submit(){
    allow = true;

     $("input[name=cs_manufacturer]").val() == '' ? allow = false : nothing= true ;
     $("input[name=cs_model]").val() == '' ? allow = false : nothing= true ;
     $("input[name=cs_serial]").val() == '' ? allow = false : nothing= true ;
     $("select[name=cs_tonnage] option:selected").val() == "Default" ? allow = false : nothing= true ;
     $("select[name=cs_seer] option:selected").val() == "Default" ? allow = false : nothing= true ;


    if(allow){
      $("#centralSplit").hide();
      $("#centralGas").show();
      $("#hersTitle").append(" > Central Gas Furnace");
    }else{
      alert("Kindly fill all the fields");
    }
  }

  function centralSplit_Back(){
    $("#centralSplit").hide();
    $("#initialForm").show();   
    oneBack(); 
  }



   // (4)
   function heatPump_Submit(){
    allow = true;

     $("input[name=heat_manufacturer]").val() == '' ? allow = false : nothing= true ;
     $("input[name=heat_model]").val() == '' ? allow = false : nothing= true ;
     $("input[name=heat_serial]").val() == '' ? allow = false : nothing= true ;
     $("select[name=heat_tonnage] option:selected").val() == "Default" ? allow = false : nothing= true ;
     $("select[name=heat_seer] option:selected").val() == "Default" ? allow = false : nothing= true ;


    if(allow){
      $("#heatPump").hide();
      $("#airHandler").show();
      $("#hersTitle").append(" > Air Handler");
    }else{
      alert("Kindly fill all the fields");
    }
  }

  function heatPump_Back(){
    $("#heatPump").hide();
    $("#initialForm").show();   
    oneBack(); 
  }


   // (5)
   function centralGas_Submit(){
    allow = true;

    fulltime = $("input[name=cg_fulltime]:checked").val();
    localStorage.setItem('fulltime', fulltime);




     $("input[name=cg_manufacturer]").val() == '' ? allow = false : nothing= true ;
     $("input[name=cg_model]").val() == '' ? allow = false : nothing= true ;
     $("input[name=cg_serial]").val() == '' ? allow = false : nothing= true ;
     $("input[name=cg_btu_input]").val() == '' ? allow = false : nothing= true ;
     $("input[name=cg_btu_output]").val() == '' ? allow = false : nothing= true ;
     $("input[name=cg_efficiency]").val() == '' ? allow = false : nothing= true ;
     $("input[name=cg_fulltime]").is(":checked") ? nothing = true : allow = false ;

    if(allow){
      $("#centralGas").hide();
      if(fulltime == 'Yes'){
        $("#acCoil").show();
        $("#hersTitle").append(" > acCoil");
      }else{
        $("#testResult").show();
        $("#hersTitle").append(" > Test Result");
      }
    }else{
      alert("Kindly fill all the fields");
    }
  }

  function centralGas_Back(){
    $("#centralGas").hide();
    $("#centralSplit").show();   
    oneBack(); 
  }

  // (6)
  function acCoil_Submit(){
    allow = true;

     $("input[name=acc_manufacturer]").val() == '' ? allow = false : nothing= true ;
     $("input[name=acc_model]").val() == '' ? allow = false : nothing= true ;
     $("input[name=acc_serial]").val() == '' ? allow = false : nothing= true ;

    if(allow){
      $("#acCoil").hide();
      $("#testResult").show();
      $("#hersTitle").append(" > Test Result");
    }else{
      alert("Kindly fill all the fields");
    }
  }

  function acCoil_Back(){
    $("#acCoil").hide();
    $("#centralGas").show();   
    oneBack(); 
  }



 // (7)
  function airHandler_Submit(){
    allow = true;


     $("input[name=air_manufacturer]").val() == '' ? allow = false : nothing= true ;
     $("input[name=air_model]").val() == '' ? allow = false : nothing= true ;
     $("input[name=air_serial]").val() == '' ? allow = false : nothing= true ;
     $("input[name=air_btu_input]").val() == '' ? allow = false : nothing= true ;
     $("input[name=air_btu_output]").val() == '' ? allow = false : nothing= true ;
     $("input[name=air_efficiency]").val() == '' ? allow = false : nothing= true ;

    if(allow){
      $("#airHandler").hide();        
        $("#testResult").show();
        $("#hersTitle").append(" > Test Result");
    }else{
      alert("Kindly fill all the fields");
    }
  }

  function airHandler_Back(){
    $("#airHandler").hide();
    $("#heatPump").show();   
    oneBack(); 
  }


  // (8)
  function condenser_Submit(){
    allow = true;

     $("input[name=con_manufacturer]").val() == '' ? allow = false : nothing= true ;
     $("input[name=con_model]").val() == '' ? allow = false : nothing= true ;
     $("input[name=con_serial]").val() == '' ? allow = false : nothing= true ;
     $("input[name=con_btu_input]").val() == '' ? allow = false : nothing= true ;
     $("select[name=con_tonnage] option:selected").val() == "Default" ? allow = false : nothing= true ;
     $("select[name=con_seer] option:selected").val() == "Default" ? allow = false : nothing= true ;

    if(allow){
      $("#condenser").hide();
      $("#indoorUnit").show();
      $("#hersTitle").append(" > Indoor Unit");
    }else{
      alert("Kindly fill all the fields");
    }
  }

  function condenser_Back(){
    $("#condenser").hide();
    $("#initialForm").show();   
    oneBack(); 
  }

  // (9)
  function indoorUnit_Submit(){
    allow = true;

     $("input[name=in_manufacturer]").val() == '' ? allow = false : nothing= true ;
     $("input[name=in_model]").val() == '' ? allow = false : nothing= true ;
     $("input[name=in_serial]").val() == '' ? allow = false : nothing= true ;
     $("input[name=in_btu_input]").val() == '' ? allow = false : nothing= true ;
     $("input[name=in_btu_output]").val() == '' ? allow = false : nothing= true ;
     $("input[name=in_pounds]").val() == '' ? allow = false : nothing= true ;
     $("input[name=in_ounces]").val() == '' ? allow = false : nothing= true ;

    if(allow){
      $("#indoorUnit").hide();
      $("#notes").show();
      $("#hersTitle").append(" > Notes");
    }else{
      alert("Kindly fill all the fields");
    }
  }

  function indoorUnit_Back(){
    $("#indoorUnit").hide();
    $("#condenser").show();   
    oneBack(); 
  }



  // (10)
  function testResultSubmit(){
    allow= true;
    unit_type = localStorage.getItem('unit_type');

    $("input[name=test_ductLeakage]").is(":checked") ? nothing = true : allow = false ;
    $("input[name=test_cfm1]").val() == '' ? allow = false : nothing= true ;
    $("input[name=test_location1]").val() == '' ? allow = false : nothing= true ;


    if(unit_type == "Package_Unit" && allow){
      $("#testResult").hide(); 
      $("#notes").show(); 
      $("#hersTitle").append(" > Notes");

    }else if(unit_type == "Central_Split_AC"  && allow){
      $("#testResult").hide(); 
      $("#notes").show(); 
      $("#hersTitle").append(" > Notes");

    }else if(unit_type == "Heat_Pump"  && allow){
      $("#testResult").hide(); 
      $("#notes").show(); 
      $("#hersTitle").append(" > Notes");

    }else if(unit_type == "Ductless_Unit"  && allow){

    }
    
  }

  function testResult_Back(){
    unit_type = localStorage.getItem('unit_type');
    fulltime = localStorage.getItem('fulltime');
    if(unit_type == "Package_Unit" ){
      $("#packageUnit1").show();     
    }else if(unit_type == "Central_Split_AC"  && allow){
      fulltime == 'Yes' ? $("#acCoil").show() : $("#centralGas").show() ;          
      
    }else if(unit_type == "Heat_Pump"  && allow){
      $("#airHandler").show() 
    }else if(unit_type == "Ductless_Unit"  && allow){

    }
    $("#testResult").hide(); 
      oneBack();
  }

//  (11)
  function notes_Back(){
    unit_type = localStorage.getItem('unit_type');
    if(unit_type == "Ductless_Unit"){
      $("#indoorUnit").show(); 
    }else {
      $("#testResult").show(); 
    }
    
    $("#notes").hide(); 
    oneBack();
  }




//Clear Initial Form
  function initialClear(){
    $("input[name=test_name]").val('');
    $("input[name=company_name]").val('');
    $("input[name=site_address]").val('');
    $("input[name=duct_location]").prop('checked', false);
    $("input[name=email]").val('');
    $('select[name=number_of_bedroom] option[value=Default]').attr('selected','selected');
    $("input[name=unit_type]").prop('checked', false);
  }

  function packageUnit1_Clear(){
    $("input[name=pu_manufacturer]").val('');
    $("input[name=pu_model]").val('');
    $("input[name=pu_serial]").val('');
    $("input[name=pu_btu_input]").val('');
    $("input[name=pu_btu_output]").val('');
    $("input[name=pu_efficiency]").val('');
    $('select[name=pu_tonnage] option[value=Default]').attr('selected','selected');
    $('select[name=pu_seer] option[value=Default]').attr('selected','selected');
  }


  function centralSplit_Clear(){
    $("input[name=cs_manufacturer]").val('');
    $("input[name=cs_model]").val('');
    $("input[name=cs_serial]").val('');
    $('select[name=cs_tonnage] option[value=Default]').attr('selected','selected');
    $('select[name=cs_seer] option[value=Default]').attr('selected','selected');
  }

  function heatPump_Clear(){
    $("input[name=heat_manufacturer]").val('');
    $("input[name=heat_model]").val('');
    $("input[name=heat_serial]").val('');
    $('select[name=heat_tonnage] option[value=Default]').attr('selected','selected');
    $('select[name=heat_seer] option[value=Default]').attr('selected','selected');
  }


  


  function centralGas_Clear(){
    $("input[name=cg_manufacturer]").val('');
    $("input[name=cg_model]").val('');
    $("input[name=cg_serial]").val('');
    $("input[name=cg_btu_input]").val('');
    $("input[name=cg_btu_output]").val('');
    $("input[name=cg_efficiency]").val('');
    $("input[name=cg_fulltime]").prop('checked', false);

  }

  function acCoil_Clear(){
    $("input[name=acc_manufacturer]").val('');
    $("input[name=acc_model]").val('');
    $("input[name=acc_serial]").val('');

  }


  function airHandler_Clear(){
    $("input[name=air_manufacturer]").val('');
    $("input[name=air_model]").val('');
    $("input[name=air_serial]").val('');
    $("input[name=air_btu_input]").val('');
    $("input[name=air_btu_output]").val('');
    $("input[name=air_efficiency]").val('');

  }

  function condenser_Clear(){
    $("input[name=con_manufacturer]").val('');
    $("input[name=con_model]").val('');
    $("input[name=con_serial]").val('');
    $("input[name=con_btu_input]").val('');
    $('select[name=con_tonnage] option[value=Default]').attr('selected','selected');
    $('select[name=con_seer] option[value=Default]').attr('selected','selected');
  }


  function indoorUnit_Clear(){

    $("input[name=in_manufacturer]").val('');
    $("input[name=in_model]").val('');
    $("input[name=in_serial]").val('');
    $("input[name=in_btu_input]").val('');
    $("input[name=in_btu_output]").val('');
    $("input[name=in_pounds]").val('');
    $("input[name=in_ounces]").val('');

  }


  


  function testResult_Clear(){
    $("input[name=test_fanWatt]").val('');
    $('select[name=test_ductLeakage] option[value=Default]').attr('selected','selected');
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


  function notes_Clear(){
    $("input[name=notes]").val('');
  }
  function oneBack(){
    title = $("#hersTitle").html();
    title = title.substr(0,title.lastIndexOf('&gt;')-1);
    $("#hersTitle").html(title);
  }



  
  </script>

</body>

</html>
