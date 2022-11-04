@php
  function checkRouteActive ($route){
    if(Route::current()->uri == $route) return 'active';
    
  }
@endphp

<div class="left-sidenav ">
            <!-- LOGO -->
            <div class="brand">
                <a href="crm-index.html" class="logo">
                    <span>
                        <img src="{{url('public/assets')}}/images/nalar2.png" alt="logo-small" class="logo-sm">
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
                    <li class="menu-label mt-0">ADMIN</li>
                    
                    <li>
                        <a href="javascript: void(0);"  class="menu-label {{checkRouteActive('admin/produk')}}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span>
                    </li>
                    <li>
                        <a href="{{url('admin/validasi')}}"  class="menu-label {{checkRouteActive('validasi')}}"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Validasi</span>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Perbaikan Aset</span>
                    </li> 
                    <li>
                        <a href="{{url('admin/divisi')}}"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Divisi</span>
                    </li> 
                    <li>
                        <a href="{{url('admin/pegawai')}}"><i data-feather="user" class="align-self-center menu-icon"></i><span>Pegawai</span>
                    </li> 
                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Setting</li>
    
                    <li>
                        <a href="{{url('logout')}}"><i data-feather="box" class="align-self-center menu-icon"></i><span>Logout</span>
                    </li>
                </ul>
            </div>
        </div>