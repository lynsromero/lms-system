<div class="sidebar sidebar-style-2" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img src="{{ asset('admin/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
          height="20" />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item">
          <a href="#">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#teachersCollapse">
            <i class="fas fa-user-tie"></i>
            <p>Teachers</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="teachersCollapse">
            <ul class="nav nav-collapse">
              <li><a href="sidebar-style-2.html"><i class="fas fa-user-plus"></i>Register</a></li>
              <li><a href="icon-menu.html"><i class="fas fa-list"></i>List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#studentsCollapse">
            <i class="fas fa-user-graduate"></i>
            <p>Students</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="studentsCollapse">
            <ul class="nav nav-collapse">
              <li><a href="sidebar-style-2.html"><i class="fas fa-user-plus"></i>Register</a></li>
              <li><a href="icon-menu.html"><i class="fas fa-list"></i>List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#coursesCollapse">
            <i class="fas fa-graduation-cap"></i>
            <p>Courses</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="coursesCollapse">
            <ul class="nav nav-collapse">
              <li><a href="sidebar-style-2.html"><i class="fas fa-user-plus"></i>Register</a></li>
              <li><a href="icon-menu.html"><i class="fas fa-list"></i>List</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>