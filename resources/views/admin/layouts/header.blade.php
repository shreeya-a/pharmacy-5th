<style>
  .main-header {
    background-color: #007bff !important;
  }
</style>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light ">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
  </ul>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <div class="user-panel d-flex">

        <div class="image mr-2">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <h5 class="mt-1 mr-5">{{auth()->user()->name}}</h5>
      </div>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->

</nav>
<!-- /.navbar -->