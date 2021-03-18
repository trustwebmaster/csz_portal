<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
        <title>Email Veryfication | CSZ Membership</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ ('Adminto/assets/images/favicon.ico') }}">

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
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="index.html" class="logo">
                                <img src="img-assets/csz.png" alt="" width="175" height="120"class="logo-light mx-auto">
                               <img src="img-assets/csz.png" alt="" width="175" height="120" class="logo-dark mx-auto">
                            </a>
                        </div>
                        <div class="card text-center">

                            <div class="card-body p-4">
                                
                                <div class="mb-4">
                                    <h4 class="text-uppercase mt-0">Confirm Email</h4>
                                </div>
                                <img src="img-assets/mail_confirm.png" alt="img" width="86" class="mx-auto d-block" />

                                <p class="text-muted font-14 mt-2"> A email has been send to <b>{{ $email }}</b>.
                                    Please check for an email from company and click on the included link to
                                    reset your password. </p>

                                <a href="/" class="btn btn-block btn-dark waves-effect waves-light mt-3">Back to Home</a>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        
</body>

</html>