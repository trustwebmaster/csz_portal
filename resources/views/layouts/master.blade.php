<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>CSZ Membership</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}">
    <!-- Lightbox css -->
    <link href="{{ asset('assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Calendar -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/tui-time-picker/tui-time-picker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/tui-date-picker/tui-date-picker.min.css') }}">
    <link href="{{ asset('assets/libs/tui-calendar/tui-calendar.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body>

<!-- <body data-sidebar="dark"> -->

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    @include('layouts.partials._reports')

    <!-- Topbar Start -->
        @include('layouts.partials._topbar')
    <!-- Topbar End -->


    <!-- Left Sidebar Start -->
       @if(Auth::user()->role == "admin")
           @include('layouts.partials._sidebar')
       @else
           @include('layouts.partials._clientSidebar')
       @endif

    <!-- Left Sidebar End -->

    <!-- Start right Content here -->
    <div class="main-content">

        <div class="page-content">
            @yield('content')
        </div>

        @include('layouts.partials._footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->

@include('layouts.partials._scripts')
</body>

</html>
