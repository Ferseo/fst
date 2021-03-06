<?php
//ession_start();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
$credencial = isset($_SESSION['categoria']) ? $_SESSION['categoria'] : 'Categoria';
if ($credencial === "administrador") {
  $index = "Admin";
} else if ($credencial === "jefe") {
  $index = "Boss";
} else if ($credencial === "ayudante") {
  $index = "Assistant";
}
session_write_close();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../../mediaQueries/global_Media_Queries.css">
<style>
  .navbar {
    /* background: url("../../img/background-image/auditorio.png");
    background-repeat: no-repeat;
    background-size: 1366px 700px; */
    height: 15vh;
  }

  .icon {
    padding: 1.5%;
    width: 80px;
    height: 80px;
    border-radius: 30%;
  }

  .iconUser {
    width: 40px;
    height: 40px;
  }

  .dropdown-menu {
    background-color: white;
  }
   @media only screen and (max-width: 600px){
    .main_icon{
        display:none;
    }
    .fatherList{
      position:absolute !important;
      z-index:3 !important;
      left:2.5em !important;
      top:-15px !important;
      width: 55% !important;
    }
    .dropdown-item{
      background-color: white !important;
      opacity: 1;
    }
}
</style>
<nav class="row navbar navbar-dark">
  <div class="col-2">
    <img src="../../img/icons/EscudoVicar.jpg" class="icon" alt="logo vicar" style="margin-left: 4%;">
  </div>
  <div class="col-8" style="text-align: center;">
  <h1 class="navbar-brand" style="color: #000000; font-size: 3em; margin-top: 4%;" >Teatro Auditorio Ciudad de Vícar</h1>
  </div>
  <div class="col-2 dropstart" style="text-align: right;">
    <img type="button" src="../../img/icons/userIcon.png" class="iconUser dropdown-toggle" alt="" style="margin: 2%;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li id="fatherList"><a class="dropdown-item" href='../indexPages/index<?php echo $index ?>.php'> <img src="../../img/icons/icons8-usuario-hombre-verificado-24.png">Dahsboard</a></li>
      <li><a class="dropdown-item" href="../calendar/indexCalendar.php"><img src="../../img/icons/icons8-editar-calendario-24.png">Ver Calendario</a></li>
      <li><a class="dropdown-item" href="../historicLend/indexHistoricLend.php"><img src="../../img/icons/icons-prestamo-devuelto.png">Prestamos devueltos</a></li>
      <li><a class="dropdown-item" href="../media-player/mediaPlayer.php"> <img src="../../img/icons/icons8-mp3-player-24.png"> Reproductor</a></li>
      <li><a class="dropdown-item" href="../../View/Configurations/configurations.php"> <img src="../../img/icons/icons8-configuration-and-setting-panel-in-computer-software-24.png">Ajustes</a></li>
      <li><a class="dropdown-item" href="../../login/loginView.php"> <img src="../../img/icons/icons8-exit-24.png"> Cerrar sesión</a></li>
    </ul>
    <?php printf('<span style="color: white;">' . $user . '</span>') ?>
  </div>
</nav>
<!--Funcion que se activa al cargar la pantalla en el que se recoja
con php la variable de sesion con la categoria, y dependiendo de la categoria crear una funcion que añada campos al menu desplegable-->
<script src="../../JS/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
  function completedMenu() {
    var categoria = <?php echo json_encode($credencial); ?>;
    if (categoria === "administrador") {
      var container = document.getElementById("fatherList");
      var li = document.createElement("li");
      var a = document.createElement("a");
      a.className = "dropdown-item";
      a.href = "../registerUser/registerNewUser.php";
      var img = document.createElement("img");
      img.src = "../../img/icons/icons8-aniadir-usuario-masculino-24.png";
      var texto = document.createTextNode("Registro Usuario");
      a.appendChild(img);
      a.appendChild(texto);
      li.appendChild(a);
      container.appendChild(li);

      var li2 = document.createElement("li");
      var a2 = document.createElement("a");
      a2.className = "dropdown-item";
      a2.href = "../addTasks/addTasks.php";
      var img1 = document.createElement("img");
      img1.src = "../../img/icons/icons8-agregar-recordatorio-24.png";
      var texto1 = document.createTextNode("Añadir tarea");
      a2.appendChild(img1);
      a2.appendChild(texto1);
      li2.appendChild(a2);
      container.appendChild(li2);

      var li3 = document.createElement("li");
      var a3 = document.createElement("a");
      a3.className = "dropdown-item";
      a3.href = "../historicTask/indexHistoricTasks.php";
      var img2 = document.createElement("img");
      img2.src = "../../img/icons/checkmark.png";
      var texto2 = document.createTextNode("Histórico tareas");

      a3.appendChild(img2);
      a3.appendChild(texto2);
      li3.appendChild(a3);
      container.appendChild(li3);

    } else if (categoria === "jefe") {
      var container = document.getElementById("fatherList");
      var li = document.createElement("li");
      var a = document.createElement("a");
      a.className = "dropdown-item";
      a.href = "../addTasks/addTasks.php";
      var img = document.createElement("img");
      img.src = "../../img/icons/icons8-agregar-recordatorio-24.png";
      var texto = document.createTextNode("Añadir tarea");
      a.appendChild(img);
      a.appendChild(texto);
      li.appendChild(a);
      container.appendChild(li);
    }
  }
  window.onload = completedMenu();
</script>
