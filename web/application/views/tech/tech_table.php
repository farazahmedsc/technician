<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Submit | HERS Test</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/favicon.png" />
  
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
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
         
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Submitted Data</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table table-hover table-striped" id="myTable">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Test Name</th>
                          <th>Company Name</th>
                          <th>Site Address</th>
                          <th>Duct Location</th>
                          <th>Email</th>
                          <th>Number Of Bedroom</th>
                          <th>Unit Type</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                          foreach($form_list as $f){ ?>
                          
                          <tr>
                            <td><a href="<?php echo base_url();?>form/update/<?php echo $f->f_id; ?>"><?php echo $f->f_id; ?></a></td>
                            <td><?php echo $f->test_name; ?></td>                           
                            <td><?php echo $f->company_name; ?></td>
                            <td><?php echo $f->site_address; ?></td>
                            <td><?php echo $f->duct_location; ?></td>
                            <td><?php echo $f->email; ?></td>
                            <td><?php echo $f->number_of_bedroom; ?></td>
                            <td><?php                             
                            $unitType = $f->unit_type;                             
                            if($unitType == "Package_Unit"){
                              echo "<label class='badge badge-danger'>Package Unit</label>";
                            } else if($unitType == "Central_Split_AC"){
                              echo "<label class='badge badge-primary'>Central Split AC</label>";
                            } else if($unitType == "Heat_Pump"){
                              echo "<label class='badge badge-warning'>Heat Pump</label>";
                            } else {
                              echo "<label class='badge badge-success'>Ductless Unit</label>";
                            }
                            ?></td>
                          </tr>
                            <?php }
                          ?>


                      </tbody>
                    </table>
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
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>asset/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/template.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/todolist.js"></script>


  <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->


  <script>
  function HitData(){
      alert("Will Redirect to Detail View");
  }


  $(document).ready( function () {
    $('#myTable').DataTable();
    } );
  </script>
</body>

</html>
