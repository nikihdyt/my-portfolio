  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/projects" class="brand-link">
      <span class="brand-text font-weight-light">Niki's Portofolio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      @auth
      <div>
        <!-- Sidebar user panel (if login) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('lte/dist/img/profile-pic.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="/about-me" class="d-block">Welcome <b>{{ Auth::user()->name }}</b></a>
          </div>
        </div>
      </div>

      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link active btn btn-danger">
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      @endauth

      @guest
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link active btn btn-primary">
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link btn btn-info">
                  <p>Register</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      @endguest

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

    </div>
    <!-- /.sidebar -->
  </aside>