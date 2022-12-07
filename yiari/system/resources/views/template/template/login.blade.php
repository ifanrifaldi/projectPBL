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
        <link rel="shortcut icon" href="{{url('public')}}/assets/images/yiari.png">

        <!-- App css -->
        <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <style>
            .input-custom{
                position: relative;
            }
            .checkbox-show{
                position: absolute;
                right: 0;
                top: 28px;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 35px;
                height: 35px;
                z-index: 99;
            }
        </style>

    </head>

    <body class="account-body accountbg" >

        <!-- Register page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="{{url('public')}}/assets/images/yiari.png" height="70" alt="logo" class="auth-logo">
                                        </a>
                                        <!-- <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18"></h4>
                                        <p class="text-muted  mb-0">Sistem Informasi International Animal Rescue</p> -->
                                    </div>
                                </div>
                                <div class="card-body">
                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active px-3 pt-3" id="Register_Tab" role="tabpanel">
                                        <form action="{{url('login')}}" method="post">
                                            @csrf
                                                <div class="form-group">
                                                    <label for="username">NIK</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="nik"  placeholder="Masukan NIK ...">
                                                    </div>
                                                </div><!--end form-group-->


                                                <div class="form-group input-custom">
                                                    <label for="userpassword">Password</label>
                                                    <div class="input-group mb-3">
                                                        <input type="password" class="form-control" id="input-password" name="password"  placeholder="Password">
                                                    </div>
                                                    <div class="checkbox-show">
                                                        <input type="checkbox" id="show-password" class="input-checkbox">
                                                        <i data-feather="eye-off"></i>
                                                    </div>
                                                </div><!--end form-group-->

                                                <div class="form-group row mt-4">
                                                    <div class="col-sm-12">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                            <label class="custom-control-label text-muted" for="customSwitchSuccess">Remeber Me </label>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end form-group-->

                                                <div class="form-group mb-0 row">
                                                    <div class="col-12 mt-2">
                                                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light" type="button">Login <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col-->
                                                </div> <!--end form-group-->
                                        </form><!--end form-->
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">ifanrifaldi © 2022</span>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Register page -->




        <!-- jQuery  -->
        <script src="{{url('public')}}/assets/js/jquery.min.js"></script>
        <script src="{{url('public')}}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public')}}/assets/js/waves.js"></script>
        <script src="{{url('public')}}/assets/js/feather.min.js"></script>
        <script src="{{url('public')}}/assets/js/simplebar.min.js"></script>
        <script>
            $(document).ready(function(){
		$('#show-password').click(function(){
			if($(this).is(':checked')){
				$('#input-password').attr('type','text');
			}else{
				$('#input-password').attr('type','password');
			}
		});
	});
        </script>

    </body>

</html>
