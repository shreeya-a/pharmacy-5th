   <!-- Font Awesome Icons -->
   <!-- <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}"> -->
   <!-- <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}"> -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary  elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">

      <img src="{{ asset('userpanel/assets/images/logo-img.png')}}" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NePharma</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">

          <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link  {{ Request::is('dashboard') ? 'active':''; }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('prescription')}}" class="nav-link {{ Request::is('prescription') ? 'active':''; }}">
              <i class="nav-icon fas fa-file-medical"></i>
              <p>
               Prescription Uploads
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('order')}}" class="nav-link {{ Request::is('order') ? 'active':''; }}">
              <i class="nav-icon fab fa-first-order"></i>
              <p>
               Orders
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('product')}}" class="nav-link {{ Request::is('product') ? 'active':''; }}">
            <i class=" nav-icon fab fa-product-hunt" aria-hidden="true"></i>
              <p>
               Product
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item  ">
            <a href="{{route('category')}}" class="nav-link {{ Request::is('category') ? 'active':''; }} ">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <i class="nav-icon fas fa-th"></i>
              <p>
              Category
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('section')}}" class="nav-link {{ Request::is('section') ? 'active':''; }}">
            <i class=" nav-icon fas fa-th-large" aria-hidden="true"></i>
              <p>
              Section
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('users')}}" class="nav-link {{ Request::is('users') ? 'active':''; }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Users
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link {{ Request::is('logout') ? 'active':''; }}">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <i class="fas fa-sign-out"></i>
              <p>
               Log out
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>