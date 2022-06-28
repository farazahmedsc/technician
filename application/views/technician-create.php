<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Technician | Hers test</title>
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
                  <h4 class="card-title" id="hersTitle">Add Technician </h4>
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

                  
                  <form class="forms-sample" method="post" action="<?php echo base_url();?>Technician/create_technician" enctype="multipart/form-data">

                    <div class="row" id="initialForm">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Technician Name*</label>
                            <input type="text" class="form-control" name="t_name" placeholder="Technician Name" required >
                        </div>
                      </div><!-- col-md-6 End-->

                      


                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Email </label>
                            <input type="text" class="form-control" name="t_email" placeholder="email">
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Phone*</label>
                            <input type="text" class="form-control" name="t_phone" placeholder="Phone" required>
                        </div>
                      </div><!-- col-md-6 End-->

                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Username*</label>
                            <input type="text" class="form-control" name="t_username" placeholder="username" >
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Password*</label>
                            <input type="text" class="form-control" name="t_password" placeholder="Password" required>
                        </div>
                      </div><!-- col-md-6 End-->


                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-check form-check-flat form-check-primary">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="t_active" checked>
                              Active
                          <i class="input-helper"></i></label>
                          </div>
                        </div>
                      </div><!-- col-md-6 End-->




                     
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                      </div>

                    </div>


                    


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



  
  </script>
</body>

</html>
