<?php
include_once '../../APIquerys/apiQuerys.php';
$api = new apiQuerys;
$nombre = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
$date = date("j-n-Y");
$dataTask = $api->getTask($nombre, $date);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<style>
    .contentNofifications {
        text-align: center;
        background-color: #bdbbb0;
        border: 10px double #8a897c;
        height: 86vh;
        box-shadow: 2px 2px 2px 2px gray;
        /*height: 100vh;*/ /*Si no funciona asi, probar a llamar a la propiedad desde el id*/
    }

    tr {
        background-color: #fff;
        border: 1px solid black;
        font-size: 0.95em;
        height: 80px;
        opacity: 85%;
    }

    .button {
        border: 1px solid #bdbbb0;
        /*anchura, estilo y color borde*/
        padding: 2px;
        /*espacio alrededor texto*/
        background-color: #bdbbb0;
        /*color botón*/
        color: #ffffff;
        /*color texto*/
        text-decoration: none;
        /*decoración texto*/
        text-transform: uppercase;
        /*capitalización texto*/
        font-family: 'Helvetica', sans-serif;
        /*tipografía texto*/
        border-radius: 50%;
        /*bordes redondos*/
        margin: 2%;
    }
</style>
<div class="col" style="padding: 0;">
    <div class="contentNofifications" style="padding: 0;" id="containerTable">

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
        var button = document.createElement("a");
        button.innerHTML = "x";
        button.className = "btn button deleteNotifications";
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