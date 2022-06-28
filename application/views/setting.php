<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Setting | Hers test</title>
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
              <h4 class="card-title" id="hersTitle">HERS Test</h4>
              <!-- <p class="card-description">
                    Basic form elements
                  </p> -->



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


              <form class="forms-sample" method="post" action="<?php echo base_url();?>Hers/setting_upd/<?php echo $user_single->u_id;?>"
                enctype="multipart/form-data">

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="u_name" value="<?php echo $user_single->u_name;?>">
                    </div>
                  </div><!-- col-md-6 End-->


                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="u_username" value="<?php echo $user_single->u_username;?>">
                    </div>
                  </div><!-- col-md-6 End-->


                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" name="u_password" value="<?php echo $user_single->u_password;?>">
                    </div>
                  </div><!-- col-md-6 End-->


                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="u_email" value="<?php echo $user_single->u_email;?>">
                    </div>
                  </div><!-- col-md-6 End-->

                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary mr-2">Update</button>

                  </div>

                </div>

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


    // $( document ).ready(function() {
    //     $("input[name=url]").val(window.location.href);
    // });




  </script>
</body>

</html>