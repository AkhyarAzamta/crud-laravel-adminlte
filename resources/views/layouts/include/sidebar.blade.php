<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Azam</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="{{url('/dashboard')}}" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
          
        </li>
        <li class="nav-item has-treeview">
          <a href="{{url('mahasiswa/dosen')}}" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Data Dosen
            </p>
          </a>     
        </li>
        <li class="nav-item has-treeview">
          <a href="{{url('mahasiswa')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Data Mahasiswa
            </p>
          </a>
      
        </li>
   
        <li class="nav-item has-treeview">
          <a href="/mahasiswa/create" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Input mahasiswa
            </p>
          </a>
      
        </li>
        <li class="nav-item has-treeview">
          <a href="{{url('/mahasiswa/matkul')}}" class="nav-link">
            <i class="nav-icon fas fa-book-open"></i>
            <p>
              Data Nilai Mata Kuliah
            </p>
          </a>

        </li>
        <li class="nav-item has-treeview">
          <a href="{{url('/logout')}}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>

        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>
