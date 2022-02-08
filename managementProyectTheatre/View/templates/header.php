<?php
session_start();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  .navbar {
    /*background-color: #353535;*/
    background-color: #1f1f1f;
    height: 15vh;
  }

  .icon {
    padding: 1.5%;
    width: 80px;
    height: 80px;
    border-radius: 30%;
  }

  .iconUser{
    width: 40px;
    height: 40px;
  }
 
 .dropdown-menu{
   background-color: #1f1f1f;
 }
</style>

<nav class="row navbar navbar-dark">
  <div class="col-2">
    <img src="../../img/icons/EscudoVicar.jpg" class="icon" alt="logo vicar" style="margin-left: 4%;" >
  </div>
  <div class="col-9" style="text-align: center;">
  <a class="navbar-brand">Teatro Auditorio Ciudad de Vícar</a>
  </div>
  <div class="col-1 dropstart" style="text-align: right;">
  
  <img type="button" src="../../img/icons/userIcon.png" class="iconUser dropdown-toggle" alt="" style="margin: 2%;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#"> <img src="../../img/icons/icons8-usuario-hombre-verificado-24.png"> Mi perfil</a></li>
    <li><a class="dropdown-item" href="#"><img src="../../img/icons/icons8-editar-calendario-24.png">Ver Calendario</a></li>
    <li><a class="dropdown-item" href="#"> <img src="../../img/icons/icons8-mp3-player-24.png"> Reproductor</a></li>
    <li><a class="dropdown-item" href="#"> <img src="../../img/icons/icons8-configuration-and-setting-panel-in-computer-software-24.png"> Configuración</a></li>
    <li><a class="dropdown-item" href="../login/loginView.php"> <img src="../../img/icons/icons8-exit-24.png"> Cerrar sesión</a></li>
  </ul>
  <?php printf('<span style="color: white;">'.$user.' </span>' ) ?>
  </div>
</nav>

<!--Aqui añadir un script que se active al cargar la pantalla en el que se recoja
con php la variable de sesion con el usuario, y dependiendo de la catedoria crear una funcion que añada campos al menu desplegable-->