<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Forms2 | Hers test</title>
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

  <style>
      .form-group {
    margin-bottom: 0.5rem;
    }
    .form-group label{
        margin-bottom: 0.2rem;
    }
  </style>

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
            <h3>Form Number <?=$this->session->userdata('form')['no_of_form']?></h3> <br>
            <hr>

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
              <!-- <div class="row">
                <div class="col-12 mt-4">
                  <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('message_error'); ?>
                  </div>
                </div>
              </div> -->

              <?php }
                  ?>


                
                    <!-- <div class="row" id="ask_no_of_system">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Total How many systems are there*</label>
                                <select class="form-control" name="no_of_system">
                                    <option value="1" Selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                    
                        </div>
                    
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary mr-2" onclick="no_of_system()">Next</button>
                    
                        </div>
                    
                    </div> -->




           

              <!-- <form class="forms-sample" id="formTech" method="post" action="<?php echo base_url();?>form/create"
                enctype="multipart/form-data"> -->
                
                 <?php
                      $loggedUser = $this->session->userdata('loggedUser');                      
                ?>

              <div id="first_Form">

                  <div class="row" id="unitType">
                      <div class="col-md-12">
                        <h4 class> Select Unit Type </h4>
                      </div>
                      <div class="col-md-6 mb-4">
                        <button type="button" onclick="unitType('Package Unit')" class="btn btn-danger btn-lg btn-block py-5"> <h3 class="my-2">Package Unit</h3></button>
                      </div>


                      <div class="col-md-6 mb-4">
                        <button type="button" onclick="unitType('Central Split AC')" class="btn btn-primary btn-lg btn-block py-5"> <h3 class="my-2">Central Split AC</h3></button>
                      </div>

                    

                      <div class="col-md-6">
                        <button type="button" onclick="unitType('Heat Pump')" class="btn btn-warning btn-lg btn-block py-5"> <h3 class="my-2">Heat Pump</h3></button>
                      </div>


                      <div class="col-md-6">
                        <button type="button" onclick="unitType('Ductless Unit')" class="btn btn-success btn-lg btn-block py-5"> <h3 class="my-2">Ductless Unit</h3></button>
                      </div>

                      
                  </div>


                  <div class="row" id="initialForm">

                    <div class="col-md-6" style="display: none;">
                      <div class="form-group">
                        <?php
                          if($this->session->userdata('form')['no_of_form'] ==1){
                            $disabled = '';
                          }else{
                            $disabled = 'readonly';
                          }
                        ?>
                        <label>URL*</label>
                        <input type="text" class="form-control" name="url" placeholder="url " value="form">
                        form number
                        <input type="text" class="form-control" name="no_of_form" placeholder="forms Number " value="<?=$this->session->userdata('form')['no_of_form']?>">
                        tech_id
                        <input type="text" class="form-control" name="tech_id" placeholder="tech_id " value="<?=$loggedUser['u_id'];?>">

                        <input type="text" class="form-control" name="id" placeholder="form_id " value="<?=$this->session->userdata('form')['form_id']?>">

                      </div>
                    </div><!-- col-md-6 End-->

                   

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Test Name*</label>
                        <input type="text" class="form-control" name="test_name" placeholder="Test Name"  <?=$disabled?> value="<?=$this->session->userdata('form')['test_name']?>">
                      </div>
                    </div><!-- col-md-6 End-->   

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Company Name*</label>
                        <input type="text" class="form-control" name="company_name" placeholder="Company Name"  <?=$disabled?> value="<?=$this->session->userdata('form')['company_name']?>">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Site Address*</label>
                        <input type="text" class="form-control" name="site_address" placeholder="Site Address"  <?=$disabled?> value="<?=$this->session->userdata('form')['site_address']?>">
                      </div>
                    </div><!-- col-md-6 End offset-sm-1-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email*</label>
                        <input type="text" class="form-control" name="email" placeholder="Email"  <?=$disabled?> value="<?=$this->session->userdata('form')['email']?>">
                      </div>
                    </div><!-- col-md-6 End-->



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

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-12">Full Title 24? *</label>
                        <div class="form-check col-sm-3 offset-sm-1">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="fulltime" value="Yes">
                            Yes
                          </label>
                        </div>

                        <div class="form-check col-sm-3">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="fulltime" value="No">
                            No
                          </label>
                        </div>
                      </div>
                    </div>      <!-- col-md-6 End-->            

                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="initialSubmit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="initialClear()">Clear Form</button>

                    </div>

                  </div>



                  <form class="forms-sample" id="formPackageUnit" method="post" action="<?php echo base_url();?>Form/pu_submit"
                enctype="multipart/form-data">
                  <!-- Package Unit 1 (2) Start -->


                      <?php include('layout/package_unit.php') ?>

                  <!-- Package Unit 1 (2) End -->

                  </form>




                  <form class="forms-sample" id="formCentralSplitAc" method="post" action="<?php echo base_url();?>Form/cs_submit"
                enctype="multipart/form-data">
                  <!-- Central Split AC (2) Start -->


                      <?php include('layout/central_split.php') ?>

                  <!-- Central Split AC (2) End -->

                  </form>


                  <form class="forms-sample" id="formHeatPump" method="post" action="<?php echo base_url();?>Form/hp_submit"
                enctype="multipart/form-data">
                  <!-- HEAT PUMP (2) Start -->


                      <?php include('layout/heat_pump.php') ?>

                  <!-- HEAT PUMP (2) End -->

                  </form>


                  <form class="forms-sample" id="formDuctlessUnit" method="post" action="<?php echo base_url();?>Form/du_submit"
                enctype="multipart/form-data">
                  <!-- Ductless Unit (2) Start -->


                      <?php include('layout/ductless_unit.php') ?>

                  <!-- Ductless Unit (2) End -->

                  </form>


                 
                </div>

                <!-- ================================================================================= -->
              <!-- First Form End -->
                <!-- ================================================================================= -->





            

              <!-- ================================================================================= -->
              <!-- Second Form End -->
              <!-- ================================================================================= -->
             
             
            

                <!-- ================================================================================= -->
                <!-- third Form End -->
                <!-- ================================================================================= -->


                <button type="submit" class="btn btn-primary mr-2" id="submitBtn" style="display:none;" >Submit</button>



              <!-- </form> -->



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
    // dummy_data();
    // function dummy_data(){
    //     $("input[name=test_name]").val('test name');
    //     $("input[name=company_name]").val('company Name');
    //     $("input[name=site_address]").val('site address');
    //     $("input[name=duct_location]").val("Crawl_Space");
    //     $("input[name=email]").val('email@email.com');
    //     $("select[name=number_of_bedroom]").val('1');


    // }
    var unit_type = '';
    var fulltime = '';
    function unitType(v){
      unit_type = v;
      $("#unitType").hide();
      $("#initialForm").show();
    }
 

  function submitSend(){
    $(".loader").css("display","flex");
    $("#submitBtn").click();
  }
  </script>


<!-- First Script -->
  <script>



    hideAll()
    function hideAll() {
      $("#initialForm").hide();
      $("#formPackageUnit").hide();
      $("#formCentralSplitAc").hide();
      $("#formHeatPump").hide();
      $("#formDuctlessUnit").hide();
      // $("#packageUnit1").hide();
      // $("#packageUnit_btn").hide();
      // $("#centralSplit").hide();
      // $("#heatPump").hide();
      // $("#centralGas").hide();
      // $("#acCoil").hide();
      // $("#airHandler").hide();
      // $("#condenser").hide();
      // $("#indoorUnit").hide();
      // $("#testResult").hide();
      // $("#refrigerant").hide();
      // $("#windows").hide();
      // $("#water_heater").hide();
      // $("#kitchen").hide();
      // $("#notes").hide();
      // 

    }
    //First Initial Form
    function initialSubmit() {
      $("#initialForm").hide();

      // unit_type = $("input[name=unit_type]:checked").val();
      // localStorage.setItem('unit_type', unit_type);
      fulltime = $("input[name=fulltime]:checked").val();

      allow = true;
      $("input[name=test_name]").val() == '' ? allow = false : nothing = true;
      $("input[name=company_name]").val() == '' ? allow = false : nothing = true;
      $("input[name=site_address]").val() == '' ? allow = false : nothing = true;
      $("input[name=duct_location]").is(":checked") ? nothing = true : allow = false;
      $("input[name=email]").val() == '' ? allow = false : nothing = true;
      $("select[name=number_of_bedroom] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("input[name=fulltime]").is(":checked") ? nothing = true : allow = false;

      if (unit_type == "Package Unit" && allow) {
        $("#packageUnit1").show();
        $("#packageUnit_btn").show();
        $("#formPackageUnit").show();

        $("#putestResult").hide();
        $("#pufulltime_yes").hide();
        $("#punotes").hide();

        fillInitialForm('pu_');
        
        $("#hersTitle").append(" > Package Unit");

      } else if (unit_type == "Central Split AC" && allow) {


        $("#centralGas").show();
        $("#centralGas_btn").show();
        $("#formCentralSplitAc").show();

        

        $("#centralSplit").hide();
        $("#centralSplit_btn").hide();
        $("#acCoil").hide();
        $("#acCoil_btn").hide();
        $("#csfulltime_yes").hide();
        $("#cstestResult").hide();
        $("#csnotes").hide();
        

        fillInitialForm('cs_');
        $("#hersTitle").append(" > Central Gas Furnace");
        

      } else if (unit_type == "Heat Pump" && allow) {

        $("#formHeatPump").show();
        $("#airHandler").show();
        $("#airHandler_btn").show();

        $("#hpacCoil").hide();
        $("#hpacCoil_btn").hide();
        $("#heatPump").hide();
        $("#heatPump_btn").hide();
        $("#hptestResult").hide();
        $("#hpfulltime_yes").hide();
        $("#hpnotes").hide();
      
        
        fillInitialForm('hp_');
        $("#hersTitle").append(" > Air Handler");

      } else if (unit_type == "Ductless Unit" && allow) {

        $("#formDuctlessUnit").show();
        $("#indoorUnit").show();
        $("#indoorUnit_btn").show();

        $("#condenser").hide();
        $("#condenser_btn").hide();
        $("#dufulltime_yes").hide();
        $("#dunotes").hide();
       
        $("#hersTitle").append(" > Indoor Unit");

      } else {
        alert("Kindly fill all the fields");
        $("#initialForm").show();
      }

    }

    function fillInitialForm(p){
      $("input[name="+p+"url]").val($("input[name=url]").val());
      $("input[name="+p+"no_of_form]").val($("input[name=no_of_form]").val());
      $("input[name="+p+"tech_id]").val($("input[name=tech_id]").val());
      $("input[name="+p+"id]").val($("input[name=id]").val());
      $("input[name="+p+"test_name]").val($("input[name=test_name]").val());
      $("input[name="+p+"company_name]").val($("input[name=company_name]").val());
      $("input[name="+p+"site_address]").val($("input[name=site_address]").val());
      $("input[name="+p+"email]").val($("input[name=email]").val());
      $("input[name="+p+"duct_location]").val($("input[name=duct_location]").val());
      $("input[name="+p+"number_of_bedroom]").val( $("select[name=number_of_bedroom] option:selected").val());
      $("input[name="+p+"fulltime]").val( $("input[name=fulltime]").val());

    }

    /* =====================================================
                PACKAGE UNIT
    ======================================================== */

    // 
    function packageUnit1_Submit() {
      allow = true;

    $('input[name="pu_manufacturer[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
    $('input[name="pu_model[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
    $('input[name="pu_serial[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
    $('input[name="pu_btu_input[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
    $('input[name="pu_btu_output[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
    $('input[name="pu_efficiency[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
    $('select[name="pu_tonnage[]"]').each(function() { $(this).val() == 'Default' ? allow = false : nothing = true; });
    $('select[name="pu_seer[]"]').each(function() { $(this).val() == 'Default' ? allow = false : nothing = true; });
      
      
      if (allow) {
        $("#packageUnit1").hide();
        $("#packageUnit_btn").hide();
        
        $("#putestResult").show();
        $("#hersTitle").append(" > Test Result");
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function packageUnit1_Back() {
      $("#packageUnit1").hide();
      $("#packageUnit_btn").hide();
      
      $("#initialForm").show();
      oneBack();
    }

    function packageUnit_addMore(){
      // $( ".pu_clone" ).clone().appendTo( "#packageUnit1" );
      $( ".pu_clone:first" ).clone().appendTo( "#packageUnit1" );
      $("#packageUnit1 .pu_clone:last input").val('');
      $("#packageUnit1 .pu_clone:last select").val('Default');
      $("#packageUnit1 .pu_clone:last input[name='pu_image1[]']").attr("name", "pu_image"+ $("#packageUnit1 .pu_clone").length+"[]" );
      $("#packageUnit1 .pu_clone:last .file-upload-browse").attr("onclick",  "pu_image_click('pu_image"+$("#packageUnit1 .pu_clone").length+"')" );

    }
    function packageUnit_lessOne(){
      $("#packageUnit1 .pu_clone:last").remove();
    }

    function pu_image_click(p){
      if(p != 'pu_image1'){
        $(`input[name='${p}[]']`).click();
      }      
    }

    // Test Result

    function putestResultSubmit() {
      allow = true;


      $("input[name=putest_ductLeakage]").is(":checked") ? nothing = true : allow = false;


      if (unit_type == "Package Unit" && allow) {

        if (fulltime == "Yes") {
          $("#putestResult").hide();
          $("#pufulltime_yes").show();
          $("#hersTitle").append(" > Fulltime");

        } else {
          $("#putestResult").hide();
          $("#punotes").show();
          $("#hersTitle").append(" > Notes");
        }
      }


    }

    function putestResult_Back() {
      
      if (unit_type == "Package Unit") {
        $("#packageUnit1").show();
        $("#packageUnit_btn").show();
        
      } 
      $("#putestResult").hide();
      oneBack();
    }



    // (10.1)

    function pufulltime_Submit() {
      $("#pufulltime_yes").hide();
      $("#punotes").show();
        $("#hersTitle").append(" > Notes");

    

    }

    function pufulltime_Back() {
      $("#pufulltime_yes").hide();
      $("#putestResult").show();
      oneBack();
    }

    

    //  (11)
    function punotes_Back() {
      $("#putestResult").show();
      $("#punotes").hide();
   
      oneBack();
    }

    function pusubmitSend(){
      $(".loader").css("display","flex");
      $("input[name=pu_submit]").val('Submit');
      $("#pusubmit").click();
    }

    function punew_form(){
      $(".loader").css("display","flex");
      $("#pusubmit").click();
    }


    /* =====================================================
                      CENTRAL SPLIT
    ======================================================== */



    function centralGas_Submit() {
      allow = true;

      $('input[name="cg_manufacturer[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="cg_model[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="cg_serial[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="cg_btu_input[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="cg_btu_output[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="cg_efficiency[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="cg_fulltime[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });


      if (allow) {
        $("#centralGas").hide();
        $("#centralGas_btn").hide();

        $("#centralSplit").show();
        $("#centralSplit_btn").show();
        $("#hersTitle").append(" > Central Split AC");
      
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function centralGas_Back() {
      $("#centralGas").hide();
      $("#centralGas_btn").hide();
      $("#initialForm").show();      
      oneBack();
    }

    function centralGas_addMore(){
      $( ".cg_clone:first" ).clone().appendTo( "#centralGas" );
      $("#centralGas .cg_clone:last input").val('');
      // $("#centralGas .cg_clone:last select").val('Default');
      $("#centralGas .cg_clone:last input[name='cg_image1[]']").attr("name", "cg_image"+ $("#centralGas .cg_clone").length+"[]" );
      $("#centralGas .cg_clone:last .file-upload-browse").attr("onclick",  "cg_image_click('cg_image"+$("#centralGas .cg_clone").length+"')" );

    }
    function centralGas_lessOne(){
      $("#centralGas .cg_clone:last").remove();
    }

    function cg_image_click(p){
      if(p != 'cg_image1'){
        $(`input[name='${p}[]']`).click();
      }      
    }





    function centralSplit_Submit() {
      allow = true;


      $('input[name="cs_manufacturer[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="cs_model[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="cs_model[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('select[name="cs_tonnage[]"]').each(function() { $(this).val() == 'Default' ? allow = false : nothing = true; });
      $('select[name="cs_seer[]"]').each(function() { $(this).val() == 'Default' ? allow = false : nothing = true; });
     

      if (allow) {
        $("#centralSplit").hide();
        $("#centralSplit_btn").hide();

        if (fulltime == 'Yes') {
          $("#acCoil").show();
          $("#acCoil_btn").show();
          $("#hersTitle").append(" > acCoil");
        } else {
          $("#cstestResult").show();
          $("#hersTitle").append(" > Test Result");
        }

      } else {
        alert("Kindly fill all the fields");
      }
    }

    function centralSplit_Back() {
      $("#centralSplit").hide();
      $("#centralGas").show();
      oneBack();
    }

    function centralSplit_addMore(){
      $( ".cs_clone:first" ).clone().appendTo( "#centralSplit" );
      $("#centralSplit .cs_clone:last input").val('');
      $("#centralSplit .cs_clone:last select").val('Default');
      $("#centralSplit .cs_clone:last input[name='cs_image1[]']").attr("name", "cs_image"+ $("#centralSplit .cs_clone").length+"[]" );
      $("#centralSplit .cs_clone:last .file-upload-browse").attr("onclick",  "cs_image_click('cs_image"+$("#centralSplit .cs_clone").length+"')" );

    }
    function centralSplit_lessOne(){
      $("#centralSplit .cs_clone:last").remove();
    }

    function cs_image_click(p){
      if(p != 'cs_image1'){
        $(`input[name='${p}[]']`).click();
      }      
    }

    function acCoil_Submit() {
      allow = true;

      $('input[name="acc_manufacturer[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="acc_model[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="acc_serial[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });

      if (allow) {
        $("#acCoil").hide();
        $("#acCoil_btn").hide();

        $("#csfulltime_yes").show();
        $("#hersTitle").append(" > Images");
        
        // $("#cstestResult").show();
        // $("#hersTitle").append(" > Test Result");
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function acCoil_Back() {
      $("#acCoil").hide();
      
      $("#centralSplit").show();
      $("#centralSplit_btn").show();
      oneBack();
    }

    function acCoil_addMore(){
      $( ".ac_clone:first" ).clone().appendTo( "#acCoil" );
      $("#acCoil .ac_clone:last input").val('');
      $("#acCoil .ac_clone:last select").val('Default');
      $("#acCoil .ac_clone:last input[name='acc_image1[]']").attr("name", "acc_image"+ $("#acCoil .ac_clone").length+"[]" );
      $("#acCoil .ac_clone:last .file-upload-browse").attr("onclick",  "ac_image_click('acc_image"+$("#acCoil .ac_clone").length+"')" );

    }
    function acCoil_lessOne(){
      $("#acCoil .ac_clone:last").remove();
    }

    function ac_image_click(p){
      if(p != 'acc_image1'){
        $(`input[name='${p}[]']`).click();
      }      
    }

    function csfulltime_Submit(){
        $("#csfulltime_yes").hide();
        $("#cstestResult").show();
        $("#hersTitle").append(" > Test Result");
    }

    function csfulltime_Back(){
      $("#csfulltime_yes").hide();
      $("#centralSplit").show();
      $("#centralSplit_btn").show();
      oneBack();
    }


    function cstestResultSubmit() {
      allow = true;


      $("input[name=cstest_ductLeakage]").is(":checked") ? nothing = true : allow = false;

      if(allow){
          $("#cstestResult").hide();
          $("#csnotes").show();
          $("#hersTitle").append(" > Notes");
      }
       

    }

    function cstestResult_Back() {
      
        $("#centralSplit").show();
        $("#centralSplit_btn").show();
        
      
      $("#cstestResult").hide();
      oneBack();
    }



    function csnotes_Back() {
      $("#cstestResult").show();
      $("#csnotes").hide();
   
      oneBack();
    }

    function cssubmitSend(){
      $(".loader").css("display","flex");
      $("input[name=cs_submit]").val('Submit');
      $("#cssubmit").click();
    }

    function csnew_form(){
      $(".loader").css("display","flex");
      $("#cssubmit").click();
    }


    /* =====================================================
                      HEAT PUMP
    ======================================================== */


    function airHandler_Submit() {
      allow = true;


      $('input[name="air_fulltime[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="air_manufacturer[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="air_model[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="air_serial[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="air_btu_input[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="air_btu_output[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="air_efficiency[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });


      if (allow) {
        $("#airHandler").hide();
        $("#airHandler_btn").hide();


        $("#heatPump").show();
        $("#heatPump_btn").show();
        $("#hersTitle").append(" > Heat Pump");
        

      } else {
        alert("Kindly fill all the fields");
      }
    }

    function airHandler_Back() {
      $("#airHandler").hide();
      $("#airHandler_btn").hide();

      $("#initialForm").show();
      oneBack();
    }

    function airHandler_addMore(){
      $( ".ah_clone:first" ).clone().appendTo( "#airHandler" );
      $("#airHandler .ah_clone:last input").val('');
      // $("#airHandler .ah_clone:last select").val('Default');
      $("#airHandler .ah_clone:last input[name='air_image1[]']").attr("name", "air_image"+ $("#airHandler .ah_clone").length+"[]" );
      $("#airHandler .ah_clone:last .file-upload-browse").attr("onclick",  "air_image_click('air_image"+$("#airHandler .ah_clone").length+"')" );

    }
    function airHandler_lessOne(){
      $("#airHandler .ah_clone:last").remove();
    }

    function air_image_click(p){
      if(p != 'air_image1'){
        $(`input[name='${p}[]']`).click();
      }      
    }


    function heatPump_Submit() {
      allow = true;


      $('input[name="heat_manufacturer[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="heat_model[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="heat_serial[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('select[name="heat_tonnage[]"]').each(function() { $(this).val() == 'Default' ? allow = false : nothing = true; });
      $('select[name="heat_seer[]"]').each(function() { $(this).val() == 'Default' ? allow = false : nothing = true; });


      if (allow) {
        $("#heatPump").hide();
        $("#heatPump_btn").hide();

        if (fulltime == 'Yes') {
          $("#hpacCoil").show();
          $("#hpacCoil_btn").show();

          $("#hersTitle").append(" > acCoil");
        } else {
          $("#hptestResult").show();
          $("#hersTitle").append(" > Test Result");
        }

      } else {
        alert("Kindly fill all the fields");
      }
    }

    function heatPump_Back() {
      $("#heatPump").hide();
      $("#heatPump_btn").hide();
      $("#airHandler").show();
      $("#airHandler_btn").show();
      oneBack();
    }

    function heatPump_addMore(){
      $( ".hp_clone:first" ).clone().appendTo( "#heatPump" );
      $("#heatPump .hp_clone:last input").val('');
      // $("#airHandler .ah_clone:last select").val('Default');
      $("#heatPump .hp_clone:last input[name='heat_image1[]']").attr("name", "heat_image"+ $("#heatPump .hp_clone").length+"[]" );
      $("#heatPump .hp_clone:last .file-upload-browse").attr("onclick",  "heat_image_click('heat_image"+$("#heatPump .hp_clone").length+"')" );

    }
    function heatPump_lessOne(){
      $("#heatPump .hp_clone:last").remove();
    }

    function heat_image_click(p){
      if(p != 'heat_image1'){
        $(`input[name='${p}[]']`).click();
      }      
    }


    function hpacCoil_Submit() {
      allow = true;

      $('input[name="hpacc_manufacturer[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="hpacc_model[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="hpacc_serial[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });

      if (allow) {
        $("#hpacCoil").hide();
        $("#hpacCoil_btn").hide();

        $("#hpfulltime_yes").show();
        $("#hersTitle").append(" > Images");

      } else {
        alert("Kindly fill all the fields");
      }
    }

    function hpacCoil_Back() {
      $("#acCoil").hide();
      $("#hpacCoil_btn").hide();
      
      $("#heatPump").show();
      $("#heatPump_btn").show();
      oneBack();
    }

    function hpacCoil_addMore(){
      $( ".hpac_clone:first" ).clone().appendTo( "#hpacCoil" );
      $("#hpacCoil .hpac_clone:last input").val('');
      $("#hpacCoil .hpac_clone:last select").val('Default');
      $("#hpacCoil .hpac_clone:last input[name='hpacc_image1[]']").attr("name", "hpacc_image"+ $("#hpacCoil .hpac_clone").length+"[]" );
      $("#hpacCoil .hpac_clone:last .file-upload-browse").attr("onclick",  "hpac_image_click('hpacc_image"+$("#hpacCoil .hpac_clone").length+"')" );

    }
    function hpacCoil_lessOne(){
      $("#hpacCoil .hpac_clone:last").remove();
    }

    function hpac_image_click(p){
      if(p != 'hpacc_image1'){
        $(`input[name='${p}[]']`).click();
      }      
    }




    function hpfulltime_Submit(){
        $("#hpfulltime_yes").hide();
        $("#hptestResult").show();
        $("#hersTitle").append(" > Test Result");
    }

    function hpfulltime_Back(){
      $("#hpfulltime_yes").hide();
      $("#heatPump").show();
      $("#heatPump_btn").show();
      oneBack();
    }


    function hptestResultSubmit() {
      allow = true;


      $("input[name=hptest_ductLeakage]").is(":checked") ? nothing = true : allow = false;

      if(allow){
          $("#hptestResult").hide();
          $("#hpnotes").show();
          $("#hersTitle").append(" > Notes");
      }
       

    }

    function hptestResult_Back() {
      
      $("#heatPump").show();
      $("#heatPump_btn").show();
      $("#hptestResult").hide();
      oneBack();
    }



    function hpnotes_Back() {
      $("#hptestResult").show();
      $("#hpnotes").hide();
   
      oneBack();
    }

    function hpsubmitSend(){
      $(".loader").css("display","flex");
      $("input[name=hp_submit]").val('Submit');
      $("#hpsubmit").click();
    }

    function hpnew_form(){
      $(".loader").css("display","flex");
      $("#hpsubmit").click();
    }




    /* =====================================================
                      INDOOR UNIT
    ======================================================== */


    function indoorUnit_Submit() {
      allow = true;

      $('input[name="in_manufacturer[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="in_model[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="in_serial[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="in_btu_input[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="in_btu_output[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });

      if (allow) {     

        $("#indoorUnit").hide();
        $("#indoorUnit_btn").hide();
 
        $("#condenser").show();
        $("#condenser_btn").show();
        $("#hersTitle").append(" > Condenser");
       
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function indoorUnit_Back() {
      $("#indoorUnit").hide();
      $("#indoorUnit_btn").hide();
      $("#initialForm").show();
      oneBack();
    }


    function indoorUnit_addMore(){
      $( ".iu_clone:first" ).clone().appendTo( "#indoorUnit" );
      $("#indoorUnit .iu_clone:last input").val('');
      // $("#indoorUnit .ah_clone:last select").val('Default');
      $("#indoorUnit .iu_clone:last input[name='in_image1[]']").attr("name", "in_image"+ $("#indoorUnit .iu_clone").length+"[]" );
      $("#indoorUnit .iu_clone:last .file-upload-browse").attr("onclick",  "in_image_click('in_image"+$("#indoorUnit .iu_clone").length+"')" );

    }
    function indoorUnit_lessOne(){
      $("#indoorUnit .iu_clone:last").remove();
    }

    function in_image_click(p){
      if(p != 'in_image1'){
        $(`input[name='${p}[]']`).click();
      }      
    }



    function condenser_Submit() {
      allow = true;


      $('input[name="con_manufacturer[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="con_model[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="con_serial[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="con_btu_input[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="con_pounds[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('input[name="con_ounces[]"]').each(function() { $(this).val() == '' ? allow = false : nothing = true; });
      $('select[name="con_tonnage[]"]').each(function() { $(this).val() == 'Default' ? allow = false : nothing = true; });
      $('select[name="con_seer[]"]').each(function() { $(this).val() == 'Default' ? allow = false : nothing = true; });

      if (allow) {

        if (fulltime == "Yes") {
          $("#condenser").hide();
          $("#condenser_btn").hide();
          $("#dufulltime_yes").show();
          $("#hersTitle").append(" > Images");

        }else{
          $("#condenser").hide();
          $("#condenser_btn").hide();
          $("#dunotes").show();
          $("#hersTitle").append(" > Notes");

        }
        
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function condenser_Back() {

      $("#condenser").hide();
      $("#condenser_btn").hide();
      $("#indoorUnit").show();
      $("#indoorUnit_btn").show();
      // $("#initialForm").show();
      oneBack();
    }

    function condenser_addMore(){
      $( ".c_clone:first" ).clone().appendTo( "#condenser" );
      $("#condenser .c_clone:last input").val('');
      // $("#indoorUnit .ah_clone:last select").val('Default');
      $("#condenser .c_clone:last input[name='con_image1[]']").attr("name", "con_image"+ $("#condenser .c_clone").length+"[]" );
      $("#condenser .c_clone:last .file-upload-browse").attr("onclick",  "con_image_click('con_image"+$("#condenser .c_clone").length+"')" );

    }
    function condenser_lessOne(){
      $("#condenser .c_clone:last").remove();
    }

    function con_image_click(p){
      if(p != 'con_image1'){
        $(`input[name='${p}[]']`).click();
      }      
    }



    function dufulltime_Submit(){
        $("#dufulltime_yes").hide();
        $("#dunotes").show();
        $("#hersTitle").append(" > Notes");
    }

    function dufulltime_Back(){
      $("#dufulltime_yes").hide();
      $("#condenser").show();
      $("#condenser_btn").show();
      oneBack();
    }




    function dunotes_Back() {
   
      $("#dunotes").hide();
      $("#condenser").show();
      $("#condenser_btn").show();
      oneBack();
    }

    function dusubmitSend(){
      $(".loader").css("display","flex");
      $("input[name=hp_submit]").val('Submit');
      $("#dusubmit").click();
    }

    function dunew_form(){
      $(".loader").css("display","flex");
      $("#dusubmit").click();
    }






    //================


    function oneBack() {
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