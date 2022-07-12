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
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
  <!-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"
/> -->

<style>
.accordion-button{position:relative;display:flex;align-items:center;width:100%;padding:1.15rem 1.5rem;font-size:1rem;color:#4f4f4f;text-align:left;background-color:#fff;border:0;border-radius:0;overflow-anchor:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease}@media(prefers-reduced-motion:reduce){.accordion-button{transition:none}}.accordion-button:not(.collapsed){color:#1266f1;background-color:#fff;box-shadow:inset 0 -1px 0 rgba(0,0,0,.125)}.accordion-button:not(.collapsed):after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%231266f1'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z'/%3E%3C/svg%3E");transform:rotate(-180deg)}.accordion-button:after{flex-shrink:0;width:1.25rem;height:1.25rem;margin-left:auto;content:"";background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%234f4f4f'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z'/%3E%3C/svg%3E");background-repeat:no-repeat;background-size:1.25rem;transition:transform .2s ease-in-out}@media(prefers-reduced-motion:reduce){.accordion-button:after{transition:none}}.accordion-button:hover{z-index:2}.accordion-button:focus{z-index:3;box-shadow:inset 0 -1px 0 rgba(0,0,0,.125)}.accordion-header{margin-bottom:0}.accordion-item{background-color:#fff;border:1px solid rgba(0,0,0,.125)}.accordion-item:first-of-type{border-top-left-radius:.5rem;border-top-right-radius:.5rem}.accordion-item:first-of-type .accordion-button{border-top-left-radius:calc(.5rem - 1px);border-top-right-radius:calc(.5rem - 1px)}.accordion-item:not(:first-of-type){border-top:0}.accordion-item:last-of-type{border-bottom-right-radius:.5rem;border-bottom-left-radius:.5rem}.accordion-item:last-of-type .accordion-button.collapsed{border-bottom-right-radius:calc(.5rem - 1px);border-bottom-left-radius:calc(.5rem - 1px)}.accordion-item:last-of-type .accordion-collapse{border-bottom-right-radius:.5rem;border-bottom-left-radius:.5rem}.accordion-body{padding:1.15rem 1.5rem}.accordion-flush .accordion-collapse{border-width:0}.accordion-flush .accordion-item{border-right:0;border-left:0;border-radius:0}.accordion-flush .accordion-item:first-child{border-top:0}.accordion-flush .accordion-item:last-child{border-bottom:0}.accordion-flush .accordion-item .accordion-button{border-radius:0}@-webkit-keyframes progress-bar-stripes{0%{background-position-x:4px}}@keyframes progress-bar-stripes{0%{background-position-x:4px}}
</style>
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
                        <a href="#" target="_blank" class="btn btn-primary top-right-button float-right mr-1">Get PDF</a>
                        <!-- <?php echo base_url();?>PdfReport/hersReport/<?php ?> -->
                    </div>
                  </div>




                  <!-- Modal -->

                  <div id="deleteModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-body text-center">
                          <form method="post" action="<?php echo base_url(); ?>Form/delete/<?php  ?>">
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


                        
                            
                      

                    <div class="row" id="initialForm">

                            <div class="form-group d-none">
                              
                                <label>URL*</label>
                                <input type="text" class="form-control" name="url" placeholder="url " value="form">
                                form number
                                <input type="text" class="form-control" name="no_of_form" placeholder="forms Number" value="<?=$fs->no_of_form?>">
                                tech_id
                                <input type="text" class="form-control" name="tech_id" placeholder="tech_id " value="<?=$fs->tech_id?>">

                                <input type="text" class="form-control" name="id" placeholder="form_id" value="<?=$fs->id?>">

                            </div>

                            <?php $b = json_decode($fs->basic_info);?>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Test Name*</label>
                                    <input type="text" class="form-control" name="test_name" placeholder="Test Name"  readonly value="<?=$b->test_name?>">
                                </div>
                            </div><!-- col-md-6 End-->   

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Name*</label>
                                    <input type="text" class="form-control" name="company_name" placeholder="Company Name"  value="<?=$b->company_name?>">
                                </div>
                            </div><!-- col-md-6 End-->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Site Address*</label>
                                    <input type="text" class="form-control" name="site_address" placeholder="Site Address"  value="<?=$b->site_address?>">
                                </div>
                            </div><!-- col-md-6 End offset-sm-1-->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email"  value="<?=$b->email?>">
                                </div>
                            </div><!-- col-md-6 End-->

      

                            <!-- <div class="col-md-12">
                                <button type="button" class="btn btn-primary mr-2" onclick="initialSubmit()">Next</button>
                                <button type="button" class="btn btn-light float-right" onclick="initialClear()">Clear Form</button>

                            </div> -->

                    </div>


                    

                    <?php// if($i != 0){ echo 'collapsed';}?>
                    <?php // if($i == 0){ echo 'show';}?>
                      <div class="accordion" id="accordionExample">

                      <?php 
                        for($i=0; $i<$fs->no_of_form ; $i++){
                        ?>

                       
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button
                              class="accordion-button collapsed" 
                              type="button"
                              data-mdb-toggle="collapse"
                              data-mdb-target="#collapse<?=$i?>"
                              aria-expanded="true"
                              aria-controls="collapse<?=$i?>" onclick="accordionClick(<?=$i?>)" >
                             <strong>  Form Number: <?php echo $i+1 ?> </strong>
                            </button>
                          </h2>
                          <div id="collapse<?=$i?>" class="accordion-collapse collapse " aria-labelledby="headingOne" data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                              <div id="accordion_body<?=$i?>"></div>
                            </div>
                          </div>
                        </div>


                        <?php } ?>
                        
                      </div>


                    
                

                    

                        

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


  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
  <!-- jQuery library -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->

<!-- Popper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->

  <!-- End custom js for this page-->

<?php 
 include('layout_upd/package_unit.php');
 include('layout_upd/central_split.php');
 include('layout_upd/heat_pump.php');
 include('layout_upd/ductless_unit.php');

?>
  
  <script>
    fs = [];
    fs[0] = <?=(is_null($fs->form_1))? 'null' :  $fs->form_1;?>;
    fs[1] = <?=(is_null($fs->form_2))? 'null' :  $fs->form_2;?>;
    fs[2] = <?=(is_null($fs->form_3))? 'null' :  $fs->form_3;?>;
    fs[3] = <?=(is_null($fs->form_4))? 'null' :  $fs->form_4;?>;
    fs[4] = <?=(is_null($fs->form_5))? 'null' :  $fs->form_5;?>;
    fs[5] = <?=(is_null($fs->form_6))? 'null' :  $fs->form_6;?>;
    fs[6] = <?=(is_null($fs->form_7))? 'null' :  $fs->form_7;?>;
    fs[7] = <?=(is_null($fs->form_8))? 'null' :  $fs->form_8;?>;
    fs[8] = <?=(is_null($fs->form_9))? 'null' :  $fs->form_9;?>;
    fs[9] = <?=(is_null($fs->form_10))? 'null' :  $fs->form_10;?>;
    fs[10] = <?=(is_null($fs->form_11))? 'null' :  $fs->form_11;?>;
    fs[11] = <?=(is_null($fs->form_12))? 'null' :  $fs->form_12;?>;
    fs[12] = <?=(is_null($fs->form_13))? 'null' :  $fs->form_13;?>;
    fs[13] = <?=(is_null($fs->form_14))? 'null' :  $fs->form_14;?>;
    fs[14] = <?=(is_null($fs->form_15))? 'null' :  $fs->form_15;?>;
    fs[15] = <?=(is_null($fs->form_16))? 'null' :  $fs->form_16;?>;
    fs[16] = <?=(is_null($fs->form_17))? 'null' :  $fs->form_17;?>;
    fs[17] = <?=(is_null($fs->form_18))? 'null' :  $fs->form_18;?>;
    fs[18] = <?=(is_null($fs->form_19))? 'null' :  $fs->form_19;?>;
    fs[19] = <?=(is_null($fs->form_20))? 'null' :  $fs->form_20;?>;
    console.log(fs);




    function accordionClick(param){
     
      unit_type = fs[param]['unit_type'];

      $('div[id^="accordion_body"]').filter(
      function(){
        $(this).html('');
      });

      if(unit_type == "Package Unit"){
        $(`#accordion_body${param}`).html(package_unit);
        packageUnitFill(param);
      } else if(unit_type == "Central Split AC"){
        $(`#accordion_body${param}`).html(central_split);
        centralGasFill(param);
      } else if (unit_type == "Heat Pump"){
        $(`#accordion_body${param}`).html(heat_pump);
        heatPumpFill(param);
      }else if (unit_type == "Ductless Unit"){
        $(`#accordion_body${param}`).html(ductless_unit);
        ductLessFill(param);
      }

    }

    function packageUnitFill(param){
      var pu_manufacturer = JSON.parse(fs[param]['pu_manufacturer']);
      var pu_model = JSON.parse(fs[param]['pu_model']);
      var pu_serial = JSON.parse(fs[param]['pu_serial']);
      var pu_btu_input = JSON.parse(fs[param]['pu_btu_input']);
      var pu_btu_output = JSON.parse(fs[param]['pu_btu_output']);
      var pu_efficiency = JSON.parse(fs[param]['pu_efficiency']);
      var pu_tonnage = JSON.parse(fs[param]['pu_tonnage']);
      var pu_seer = JSON.parse(fs[param]['pu_seer']);
      // var pu_image1 = JSON.parse(fs[param]['pu_image1']);

      for(i=0 ; i<pu_manufacturer.length;i++){
        if(i!=0){ packageUnit_addMore(); }

        $("input[name='pu_manufacturer[]']:eq("+i+")").val(pu_manufacturer[i]);
        $("input[name='pu_model[]']:eq("+i+")").val(pu_model[i]);
        $("input[name='pu_serial[]']:eq("+i+")").val(pu_serial[i]);
        $("input[name='pu_btu_input[]']:eq("+i+")").val(pu_btu_input[i]);
        $("input[name='pu_btu_output[]']:eq("+i+")").val(pu_btu_output[i]);
        $("input[name='pu_efficiency[]']:eq("+i+")").val(pu_efficiency[i]);
        $("select[name='pu_tonnage[]']:eq("+i+")").val(pu_tonnage[i]);
        $("select[name='pu_seer[]']:eq("+i+")").val(pu_seer[i]);
        // $("input[name='pu_image1[]']:eq("+i+")").val(pu_image1[i]);
      }

      $("input[name=putest_duct_leak_result]").val(fs[param]['putest_duct_leak_result']);
      $("input[name=putest_ductLeakage]").val(fs[param]['putest_ductLeakage']);
      $("input[name=putest_fanWatt]").val(fs[param]['putest_fanWatt']);
      $("input[name=putest_cfm1]").val(fs[param]['putest_cfm1']);
      $("input[name=putest_location1]").val(fs[param]['putest_location1']);
      $("input[name=putest_cfm2]").val(fs[param]['putest_cfm2']);
      $("input[name=putest_location2]").val(fs[param]['putest_location2']);
      $("input[name=putest_cfm3]").val(fs[param]['putest_cfm3']);
      $("input[name=putest_location3]").val(fs[param]['putest_location3']);
      $("input[name=putest_cfm4]").val(fs[param]['putest_cfm4']);
      $("input[name=putest_location4]").val(fs[param]['putest_location4']);
      $("input[name=putest_cfm5]").val(fs[param]['putest_cfm5']);
      $("input[name=putest_location5]").val(fs[param]['putest_location5']);
      $("input[name=pu_notes]").val(fs[param]['pu_notes']);
    
    }


    function centralGasFill(param){
      var cg_manufacturer = JSON.parse(fs[param]['cg_manufacturer']);
      var cg_model = JSON.parse(fs[param]['cg_model']);
      var cg_serial = JSON.parse(fs[param]['cg_serial']);
      var cg_btu_input = JSON.parse(fs[param]['cg_btu_input']);
      var cg_btu_output = JSON.parse(fs[param]['cg_btu_output']);
      var cg_efficiency = JSON.parse(fs[param]['cg_efficiency']);
      
      var cs_manufacturer = JSON.parse(fs[param]['cs_manufacturer']);
      var cs_model = JSON.parse(fs[param]['cs_model']);
      var cs_serial = JSON.parse(fs[param]['cs_serial']);
      var cs_tonnage = JSON.parse(fs[param]['cs_tonnage']);
      var cs_seer = JSON.parse(fs[param]['cs_seer']);

      var acc_manufacturer = JSON.parse(fs[param]['acc_manufacturer']);
      var acc_model = JSON.parse(fs[param]['acc_model']);
      var acc_serial = JSON.parse(fs[param]['acc_serial']);

      for(i=0 ; i<cg_manufacturer.length;i++){
        if(i!=0){ centralGas_addMore(); }
        $("input[name='cg_manufacturer[]']:eq("+i+")").val(cg_manufacturer[i]);
        $("input[name='cg_model[]']:eq("+i+")").val(cg_model[i]);
        $("input[name='cg_serial[]']:eq("+i+")").val(cg_serial[i]);
        $("input[name='cg_btu_input[]']:eq("+i+")").val(cg_btu_input[i]);
        $("input[name='cg_btu_output[]']:eq("+i+")").val(cg_btu_output[i]);
        $("input[name='cg_efficiency[]']:eq("+i+")").val(cg_efficiency[i]);
      }

      for(i=0 ; i<cs_manufacturer.length;i++){
        if(i!=0){ centralSplit_addMore(); }
        $("input[name='cs_manufacturer[]']:eq("+i+")").val(cs_manufacturer[i]);
        $("input[name='cs_model[]']:eq("+i+")").val(cs_model[i]);
        $("input[name='cs_serial[]']:eq("+i+")").val(cs_serial[i]);
        $("select[name='cs_tonnage[]']:eq("+i+")").val(cs_tonnage[i]);
        $("select[name='cs_seer[]']:eq("+i+")").val(cs_seer[i]);
      }

      for(i=0 ; i<cs_manufacturer.length;i++){
        if(i!=0){ acCoil_addMore(); }
        $("input[name='acc_manufacturer[]']:eq("+i+")").val(acc_manufacturer[i]);
        $("input[name='acc_model[]']:eq("+i+")").val(acc_model[i]);
        $("input[name='acc_serial[]']:eq("+i+")").val(acc_serial[i]);
      }

      $("input[name=cstest_duct_leak_result]").val(fs[param]['cstest_duct_leak_result']);
      $("input[name=cstest_ductLeakage]").val(fs[param]['cstest_ductLeakage']);
      $("input[name=cstest_fanWatt]").val(fs[param]['cstest_fanWatt']);
      $("input[name=cstest_cfm1]").val(fs[param]['cstest_cfm1']);
      $("input[name=cstest_location1]").val(fs[param]['cstest_location1']);
      $("input[name=cstest_cfm2]").val(fs[param]['cstest_cfm2']);
      $("input[name=cstest_location2]").val(fs[param]['cstest_location2']);
      $("input[name=cstest_cfm3]").val(fs[param]['cstest_cfm3']);
      $("input[name=cstest_location3]").val(fs[param]['cstest_location3']);
      $("input[name=cstest_cfm4]").val(fs[param]['cstest_cfm4']);
      $("input[name=cstest_location4]").val(fs[param]['cstest_location4']);
      $("input[name=cstest_cfm5]").val(fs[param]['cstest_cfm5']);
      $("input[name=cstest_location5]").val(fs[param]['cstest_location5']);
      $("input[name=cs_notes]").val(fs[param]['cs_notes']);        
    }

    function heatPumpFill(param){
      var air_manufacturer = JSON.parse(fs[param]['air_manufacturer']);
      var air_model = JSON.parse(fs[param]['air_model']);
      var air_serial = JSON.parse(fs[param]['air_serial']);
      var air_btu_input = JSON.parse(fs[param]['air_btu_input']);
      var air_btu_output = JSON.parse(fs[param]['air_btu_output']);
      var air_efficiency = JSON.parse(fs[param]['air_efficiency']);



      for(i=0 ; i<cg_manufacturer.length;i++){
        if(i!=0){ airHandler_addMore(); }
        $("input[name='air_manufacturer[]']:eq("+i+")").val(air_manufacturer[i]);
        $("input[name='air_model[]']:eq("+i+")").val(air_model[i]);
        $("input[name='air_serial[]']:eq("+i+")").val(air_serial[i]);
        $("input[name='air_btu_input[]']:eq("+i+")").val(air_btu_input[i]);
        $("input[name='air_btu_output[]']:eq("+i+")").val(air_btu_output[i]);
        $("input[name='air_efficiency[]']:eq("+i+")").val(air_efficiency[i]);
      }


      $("input[name=cstest_duct_leak_result]").val(fs[param]['cstest_duct_leak_result']);
      $("input[name=cstest_ductLeakage]").val(fs[param]['cstest_ductLeakage']);
      $("input[name=cstest_fanWatt]").val(fs[param]['cstest_fanWatt']);
      $("input[name=cstest_cfm1]").val(fs[param]['cstest_cfm1']);
      $("input[name=cstest_location1]").val(fs[param]['cstest_location1']);
      $("input[name=cstest_cfm2]").val(fs[param]['cstest_cfm2']);
      $("input[name=cstest_location2]").val(fs[param]['cstest_location2']);
      $("input[name=cstest_cfm3]").val(fs[param]['cstest_cfm3']);
      $("input[name=cstest_location3]").val(fs[param]['cstest_location3']);
      $("input[name=cstest_cfm4]").val(fs[param]['cstest_cfm4']);
      $("input[name=cstest_location4]").val(fs[param]['cstest_location4']);
      $("input[name=cstest_cfm5]").val(fs[param]['cstest_cfm5']);
      $("input[name=cstest_location5]").val(fs[param]['cstest_location5']);
      $("input[name=cs_notes]").val(fs[param]['cs_notes']); 

    }

    function ductLessFill(param){

    }
  </script>

  <?php
  include('layout_upd/form_script.php');
  ?>
</body>

</html>