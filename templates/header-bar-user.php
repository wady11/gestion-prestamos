<?php
  // session_start();
  $_SESSION['usuario'];

?>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" id='tooltiphome' title='Home'>
        <a href="/Admin-LTE/dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" id='tooltipcalcu' title='Calculadora de Prestamos'>
          <a href="/Admin-LTE/cotizacionprestamos.php" class="user-profile nav-link">
            <i class="fas fa-calculator"></i>Calculadora
          </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?php echo $_SESSION['nombre']  ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

            <p>
             <?php echo $_SESSION['nombre'] .' '. $_SESSION['usuario']?>
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="/Admin-LTE/profile.php" class="btn btn-default btn-flat">Profile</a>
            <a href="index.php?signout=true" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->