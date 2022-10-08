@php
  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp
<br>
<aside class="main-sidebar sidebar-dark-info  bg-black  elevation-4" style="margin-top: 4%;">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('home')}}" class="nav-link {{checkRouteActive('admin/home')}}">
             
              <p>
                Beranda
              </p>
              <i class="nav-icon fas fa-home float-right"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin')}}" class="nav-link {{checkRouteActive('admin')}}">
              <p>
                Pembelian Barang
              </p>
              <span class="icon-thumbnail bg-success"> </span>
              <i class="nav-icon fa fa-cart-plus float-right"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('')}}" class="nav-link {{checkRouteActive('')}}">
              <p>
                Perbaikan Aset
              </p>
              <span class="icon-thumbnail bg-success"> </span>
              <i class="nav-icon fa fa-cogs float-right"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('divisi')}}" class="nav-link {{checkRouteActive('divisi')}}">
              <p>
                Divisi
              </p>
              <span class="icon-thumbnail bg-success"> </span>
              <i class="nav-icon fa fa-cogs float-right"></i>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link {{checkRouteActive('admin/user')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Kategori
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boots</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Low</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Casual</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Client
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/pembeli')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembeli</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('client/index')}}" class="nav-link {{checkRouteActive('client/index')}}">
              <i class="nav-icon fas fa-store"></i>
              <p>
                FannShoes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('setting')}}" class="nav-link {{checkRouteActive('setting')}}">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('adminlogout')}}" class="nav-link {{checkRouteActive('logout')}}">
              <i class="nav-icon fas fa-arrow-left"></i>
              <p>
                Logout
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>