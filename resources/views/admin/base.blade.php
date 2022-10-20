<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dastyle - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="public/assets/images/favicon.ico">

        <!-- App css -->
        <link href="public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="dark-sidenav">
        <!-- Left Sidenav -->
        @include('admin.section.side')
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            @include('admin.section.header')
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content"> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <!-- notif -->
                    </div>
                </div>
                @yield('content')
            </div> 

               @include('admin.section.footer')
            </div>
            <!-- end page content -->