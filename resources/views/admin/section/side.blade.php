@php
  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp

<div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="crm-index.html" class="logo">
                    <span>
                        <img src="public/assets/images/nalar2.png" alt="logo-small" class="logo-sm">
                    </span>
                    <!-- <span>
                        <img src="public/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="public/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span> -->
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Pembelian</span>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Perbaikan Aset</span>
                    </li> 
    
                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Setting</li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="box" class="align-self-center menu-icon"></i><span>Logout</span>
                    </li>
                </ul>
            </div>
        </div>