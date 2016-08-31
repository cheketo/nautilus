<!-- =============================================== -->

<header class="main-header">
  <!-- Logo -->
  <a href="../main/main.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>N</b>TL<!-- <img src="../../../skin/images/body/pictures/logo-mini.png" style="max-height:100%;max-width:100%;">--></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Nau</b>tilus</span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" id="SidebarToggle"></a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-comment"></i>
            <span class="label label-success">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">Ten&eacute;s 10 notificaciones</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-question text-red"></i> Se hizo una pregunta en el producto "Caja de herramientas"
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">Ver todas las alertas</a></li>
          </ul>
        </li>
        
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php
              $Logo = !$_SESSION['logo']? "../../../skin/images/users/default/default.jpg" : $_SESSION['logo'];
            ?>
            <img src="<?php echo $Logo; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs" id="userfullname"><?php echo $_SESSION['nickname']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo $Logo; ?>" class="img-circle" alt="User Image">
              <p>
                <?php echo $_SESSION['nickname']; ?>
                <small><?php echo $_SESSION['nickname']; ?></small>
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-primary btn-flat">Mi Perfil</a>
              </div>
              <div class="pull-right">
                <a href="../login/process.logout.php" class="btn btn-danger btn-flat">Cerrar Sesi&oacute;n</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <!--<li>-->
        <!--  <a href="../login/process.logout.php" class="btn btn-danger"><span class="fa fa-power-off"></span></a>-->
        <!--</li>-->
      </ul>
    </div>
  </nav>
</header>

<!-- =============================================== -->

<?php include('../../includes/inc.nav.php'); ?>

<!-- =============================================== -->

<?php include('../../includes/inc.sidebar.php'); ?>
