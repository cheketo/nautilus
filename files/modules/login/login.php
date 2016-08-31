<?php
  include("../../includes/inc.main.php");
  
  if($_SESSION['meli'])
  {
    header("Location: ../main/main.php");
    die();
  }
  
  $Head->setTitle("Login");
  $Head->setHead();
?>
<body class="hold-transition login-page">
<div class="login-box">
  
  <div class="login-logo">
    <a href=""><b>Nau</b>tilus</a>
  </div>
  
  <div class="">
    <button type="button" class="btn btn-primary btn-block btn-flat ButtonLogin">Ingresar</button>
  </div>
  
</div>
<?php
  $Foot->setFoot();
?>
