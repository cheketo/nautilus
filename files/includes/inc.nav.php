<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- search form -->
    <!-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> -->
    <!-- /.search form -->

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class=""><a href="../main/main.php"><i class="fa fa-home"></i> <span>Inicio</span></a>
      <li class=""><a href="../question/list.php"><i class="fa fa-comments-o"></i> <span>Responder Preguntas</span></a>
      <li class=""><a href="../question/config.php"><i class="fa fa-comment"></i> <span>Respuestas Frequentes</span></a>
      <li class=""><a href="../question/history.php"><i class="fa fa-hourglass-3"></i> <span>Historial de Respuestas</span></a>
      <li class=""><a href="../qualification/list.php"><i class="fa fa-thumbs-o-up"></i> <span>Calificar Usuarios</span></a>
      <li class=""><a href="../qualification/history.php"><i class="fa fa-clock-o"></i> <span>Historial de Calificaciones</span></a>
      <li class=""><a href="../product/list.php"><i class="fa fa-cube"></i> <span>Mis Productos</span></a>
      <li class=""><a href="../configuration/list.php"><i class="fa fa-gears"></i> <span>Configuraci&oacute;n</span></a>
      <!--<li class="header">MEN&Uacute; DEL SISTEMA</li>-->
      <?php
        //$Menu   ->insertMenu($_SESSION['profile_id'],$_SESSION['admin_id']);
      ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
