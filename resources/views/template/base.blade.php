
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>SI NALAR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('public/assets')}}/images/sinalar2.png">

        <!-- App css -->
        <link href="{{url('public/assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/assets')}}/css/jquery-ui.min.css" rel="stylesheet">
        <link href="{{url('public/assets')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/assets')}}/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/assets')}}/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/assets')}}/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="dark-sidenav">
        <!-- Left Sidenav -->
        @include('template.section.sidebar')
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            @include('template.section.header')
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content"> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        @include('template.utils.notif')
                    </div>
                </div>
                @yield('content')
            </div> 

               @include('template.section.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="{{url('public/assets')}}/js/jquery.min.js"></script>
        <script src="{{url('public/assets')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public/assets')}}/js/metismenu.min.js"></script>
        <script src="{{url('public/assets')}}/js/waves.js"></script>
        <script src="{{url('public/assets')}}/js/feather.min.js"></script>
        <script src="{{url('public/assets')}}/js/simplebar.min.js"></script>
        <script src="{{url('public/assets')}}/js/jquery-ui.min.js"></script>
        <script src="{{url('public/assets')}}/js/moment.js"></script>
        <script src="{{url('public/assets')}}/plugins/daterangepicker/daterangepicker.js"></script>

        <script src="{{url('public/assets')}}/plugins/apex-charts/apexcharts.min.js"></script>
        <script src="{{url('public/assets')}}/plugins/flot-chart/jquery.canvaswrapper.js"></script>
        <script src="{{url('public/assets')}}/plugins/flot-chart/jquery.colorhelpers.js"></script>
        <script src="{{url('public/assets')}}/plugins/flot-chart/jquery.flot.js"></script>        
        <script src="{{url('public/assets')}}/plugins/flot-chart/jquery.flot.saturated.js"></script>
        <script src="{{url('public/assets')}}/plugins/flot-chart/jquery.flot.browser.js"></script>
        <script src="{{url('public/assets')}}/plugins/flot-chart/jquery.flot.drawSeries.js"></script>         
        <script src="{{url('public/assets')}}/plugins/flot-chart/jquery.flot.uiConstants.js"></script>
        <script src="{{url('public/assets')}}/plugins/flot-chart/jquery.flot-dataType.js"></script>
        
        
        <script src="{{url('public/assets')}}/pages/jquery.crm_dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{url('public/assets')}}/js/app.js"></script>
        
    </body>

</html>