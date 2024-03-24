<header class="main-header " style="background-color:#008548">
    <!-- Logo -->
    <a href="{{route('Admin.dashboard')}}" class="logo"  style="background-color:#008548">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>MC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pharmacy</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top"  style="background-color:#008548">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header" style="color: red">You have 0 Out of Stock Medicines</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu" style="overflow-x:auto;">

                </ul>
              </li>
              <li class="footer"><a href="out-of-stock">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->


          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope  -o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <span style="color: red;font-weight: bold">0</span> Upcoming expire
                medicine.</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu" style="overflow-x:auto;">

                </ul>
              </li>
              <li class="footer">
                <a href="expire-medi-report">View all tasks</a>
              </li>
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img src="assets/profile_pic/3135715.svg" class="user-image" alt="User Image">
              <span class="hidden-xs">Software Solution Company</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                <img src="assets/profile_pic/3135715.svg" class="img-circle" alt="User Image">
                <p>
                  Software Solution Company <small>Member since Nov. 2024</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="user-profile?user_id=17" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="?signOut=logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header><!-- Left side column. contains the logo and sidebar -->