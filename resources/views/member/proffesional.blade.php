<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Dec 2020 09:17:28 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CSZ Membership | Proffessional Membership</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ ('Aminto/assets/images/favicon.ico') }}">
        <link href="{{ ('Adminto/assets/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">
        <link href="{{ ('Adminto/assets/libs/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <link href="{{ ('Adminto/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <!-- Bootstrap Css -->
        <link href="{{ ('Adminto/assets/css/bootstrap.min.css') }}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ ('Adminto/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ ('Adminto/assets/css/app.min.css') }}" id="app-stylesheet" rel="stylesheet" type="text/css" />

    </head>

<body class="authentication-bg">
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xl-6">
                    <div class="text-center">
                        <a href="index.html" class="logo">
                            <img src="img-assets/csz.png" width="175" height="120" viewBox="0 0 35 35" fill="none">
                        </a>
                    </div>
                      <div class="card">
                          <div class="card-body">
                              <h4 class="header-title mb-3">Professional  Membership Registration</h4>
                              <form action="{{ route('initialise') }}" method="POST" enctype="multipart/form-data">
                             {{ csrf_field() }} 
                                  <div id="progressbarwizard">
                                      <ul class="nav nav-pills  nav-justified form-wizard-header mb-1">
                                          <li class="nav-item">
                                              <a href="#account-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                  <i class="mdi mdi-account-circle mr-1"></i>
                                                  <span class="d-none d-sm-inline">Account</span>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="#profile-tab-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                  <i class="mdi mdi-face-profile mr-1"></i>
                                                  <span class="d-none d-sm-inline">Profile</span>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="#finish-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                  <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                  <span class="d-none d-sm-inline">Payment</span>
                                              </a>
                                          </li>
                                      </ul>
                                  
                                      <div class="tab-content border-0 mb-0">                
                                          <div id="bar" class="progress mb-3 mt-0" style="height: 7px;">
                                              <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-danger"></div>
                                          </div>
                                  
                                          <div class="tab-pane" id="account-2">
                                              <div class="row">
                                                  <div class="col-12">
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="userName1">Chapter Affiliation</label>
                                                        <div class="col-md-9">
                                                            <select type="text" class="form-control"  name="chapter" required>
                                                                <option>Gweru</option>
                                                                <option>Harare</option>
                                                                <option>Kwekwe</option>
                                                                <option>Mutare</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                      <div class="form-group row mb-3">
                                                          <label class="col-md-3 col-form-label" for="userName1">Interest Groups</label>
                                                          <div class="col-md-9">
                                                              <input type="text" class="form-control"  name="interest_group" data-role="tagsinput" required>
                                                          </div>
                                                      </div>
                                                      <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label"> First Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="name" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label">Date Of Bith</label>
                                                        <div class="col-md-9">
                                                            <input type="date" class="form-control" name="date_of_bith"  placeholder="mm/dd/yyyy" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label">Surname</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="password1" name="surname" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label">Email</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="password1" name="email" class="form-control" required>
                                                        </div>
                                                    </div>
                                                      <div class="form-group row mb-3">
                                                          <label class="col-md-3 col-form-label" for="password1"> Password</label>
                                                          <div class="col-md-9">
                                                              <input type="password" id="password1" name="password1" class="form-control"  required>
                                                          </div>
                                                      </div>      
                                                  </div> <!-- end col -->
                                              </div> <!-- end row -->
                                          </div>
              
                                          <div class="tab-pane" id="profile-tab-2">
                                              <div class="row">
                                                  <div class="col-12">
                                                      <div class="form-group row mb-3">
                                                          <label class="col-md-3 col-form-label" for="name1"> Mobile Number</label>
                                                          <div class="col-md-9">
                                                              <input type="number"  name="phonenumber" class="form-control" required>
                                                          </div>
                                                      </div>
                                                      <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label">Graduating  School</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="school" name="surname1" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label">Certifiate </label>
                                                        <div class="col-md-9">
                                                            <input type="file" name="school_id" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label">National ID</label>
                                                        <div class="col-md-9">
                                                            <input type="file" name="national_id" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="surname1">Reason For Joining CSZ</label>
                                                        <div class="col-md-9">
                                                            <textarea type="text" id="notes" rows="3" cols="3" name="notes" class="form-control" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="surname1">Physical Address</label>
                                                        <div class="col-md-9">
                                                            <textarea type="text" id="address" rows="3" cols="3" name="address" class="form-control" required></textarea>
                                                        </div>
                                                    </div>
                                                  </div> <!-- end col -->
                                              </div> <!-- end row -->
                                          </div>
              
                                          <div class="tab-pane" id="finish-2">
                                              <div class="row">
                                                  <div class="col-12">
                                                      <div class="text-center">
                                                        <img src="images/paynow.svg" width="200px" height="100px">
                                                          <div class="form-group row mb-3">
                                                            <label class="col-md-3 col-form-label">Membership Amount</label>
                                                            <div class="col-md-9">
                                                                <input type="number" name="number" class="form-control" value="150" readonly>
                                                            </div>
                                                        </div>
                                                      </div>
                                                  </div> <!-- end col -->
                                              </div> <!-- end row -->
                                          </div>
              
                                          <ul class="list-inline mb-0 wizard">
                                              <li class="previous list-inline-item">
                                                  <a href="javascript: void(0);" class="btn btn-dark">Previous</a>
                                              </li>
                                              <li class="next list-inline-item float-right">
                                                  <a href="javascript: void(0);" class="btn btn-dark">Next</a>
                                              </li>
                                          </ul>
                                      </div>
                                           <button class="btn btn-dark" type="submit" >Submit</button> <!-- tab-content -->
                                  </div> <!-- end #progressbarwizard-->
                              </form>
              
                          </div> <!-- end card-body -->
                      </div> <!-- end card-->
                  </div> <!-- end col -->
                </div> 
              </div>
        </div>
    </div>

<script src="{{ ('Adminto/assets/js/vendor.min.js') }}"></script>
<script src="{{ ('Adminto/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
<!-- Plugins js-->
<script src="{{ ('Adminto/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<script src="{{ ('Adminto/assets/libs/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- Init js-->
<script src="{{ ('Adminto/assets/js/pages/form-wizard.init.js') }}"></script>
<script src="{{ ('Adminto/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

<!-- App js -->
<script src="{{ ('Adminto/assets/js/app.min.js') }}"></script>
</body>
</html>