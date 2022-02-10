<?php
include_once '../../APIquerys/apiQuerys.php';
$api = new apiQuerys;
$nombre = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
$date = date("j-n-Y");
$dataTask = $api->getTask($nombre, $date);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<style>
    .contentNofifications {
        text-align: center;
        height: 82vh;
        box-shadow: 2px 2px 2px 2px gray;
        /*height: 100vh;*/ /*Si no funciona asi, probar a llamar a la propiedad desde el id*/
    }

    tr {
        background-color: #F5F0E6;
        border: 1px solid black;
        font-size: 0.95em;
        font-weight: bold;
        height: 80px;
        opacity: 85%;
    }

    .deleteNotifications{
      float: left;
    }
</style>
<!-- <div class="col" style="padding: 0;">
    <div class="contentNofifications" style="padding: 0;" id="containerTable">

    </div>
</div> -->
<div data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="margin-top: 0%;" >
    <div class="modal-content">
      <div class="modal-body">
      <div class="contentNofifications" id="containerTable">

    </div>   
      </div>
    </div>
</div>
<script src="../../JS/notifications/deleteNotifications.js"></script>
<script>
   function activateNotifications(data) {
    var container = document.getElementById("containerTable");
    var table = document.createElement("table");
    var tbody = document.createElement("tbody");
    for (var i = 0; i < data.length; i++) {
        var row = document.createElement("tr");
        row.id = "item";
        var textNotification = document.createTextNode(data[i].tipoTarea + " | " + data[i].horarioTarea + " |  " + data[i].lugarTarea);
        var button = document.createElement('button');
        button.innerHTML = "check_circle_outline";
        button.className = "material-icons deleteNotifications";
        button.setAttribute("onclick", "deleteNotifications()");
        button.id = data[i].cod_tarea;
        row.appendChild(button);
        row.appendChild(textNotification);
        tbody.appendChild(row);
    }
    table.appendChild(tbody);
    container.appendChild(table);
}
window.onload = activateNotifications(<?php echo json_encode($dataTask); ?>);
</script>
<script>
   
</script>