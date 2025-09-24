<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Dec 2020 09:15:01 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CSZ Membership</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('Adminto/assets/images/favicon.ico') }}">
        <link href="{{ asset('Adminto/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <!-- Plugin css -->
        <link href="{{ asset('Adminto/assets/libs/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Adminto/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('Adminto/assets/css/app.min.css') }}" id="app-stylesheet" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Adminto/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Adminto/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Adminto/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Adminto/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Adminto/assets/css/bootstrap.min.css') }}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />

</head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="caret">{{ Auth::user()->name }}</span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                </ul>
                <div class="logo-box">
                    <a href="#" class="logo logo-dark text-center">
                        <span class="logo-lg">
                            <img src="img-assets/csz.png" alt="100" height="100">
                        </span>
                        <span class="logo-lg">
                            {{-- <img src="img-assets/csz.png" alt="" height="100" width="100"> --}}
                        </span>
                    </a>

                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                    <li>
                        <h4 class="page-title-main">Dashboard</h4>
                    </li>

                </ul>

            </div>
        </div>
            <!-- end Topbar -->
            @yield('navigationbar')

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                @include('flashmessage')
                @include('sweetalert::alert')

                @yield('contents')

                </div> <!-- content -->
                @yield('modals')
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               2021 &copy;  <a href="#">Trust Musikiri</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Dec 2020 09:16:02 GMT -->
</html>

@yield('pagejs')

<script src="{{ asset( 'Adminto/assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('Adminto/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('Adminto/assets/libs/morris-js/morris.min.js') }}"></script>
<script src="{{ asset('Adminto/assets/libs/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('Adminto/assets/js/pages/dashboard.init.js') }}"></script>
<script src="{{ asset('Adminto/assets/js/app.min.js') }}"></script>
<script src="{{ asset('Adminto/assets/libs/moment/moment.js') }}"></script>
<script src="{{ asset('Adminto/assets/libs/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('Adminto/assets/libs/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('Adminto/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('Adminto/assets/js/pages/fullcalendar.init.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/jquery.dataTables.min.js') }}}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset( 'Adminto/assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ asset( 'Adminto/assets/js/pages/datatables.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset( 'Adminto/assets/js/app.min.js') }}"></script>

