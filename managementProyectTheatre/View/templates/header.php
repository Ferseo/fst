<?php
session_start();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  .navbar {
    background-color: #353535;
  }

  .icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
  }

  .iconUser{
    width: 35px;
    height: 35px;
  }
  h6{
    color:white;
  }
</style>
<nav class="row navbar navbar-dark">
  <div class="col">
    <img src="../../img/icons/Oj.png" class="icon" alt="logo vicar">
  </div>
  <div class="col" style="text-align: center;">
  <a class="navbar-brand">Teatro Auditorio Ciudad de Vícar</a>
  </div>
  <div class="col" style="text-align: right;">
  <img src="../../img/icons/userIcon.png" class="iconUser" alt="">
    <?php printf('<h6>Bienvenido '.$user.' </h6>' ) ?>
    
  </div>
</nav>
<?php unset($_SESSION['user']); ?>