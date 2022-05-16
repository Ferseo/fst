<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../JS/jquery.js"></script>
    <title>Añadir Tareas</title>
</head>
<style>
    .body {
        width: 99%;
        background: url("../../img/background-image/auditorio1_mo.jpg");
        background-repeat: no-repeat;
        background-size: auto;
    }

    .container {
        height: 70vh;

    }

    span {
        width: 25%;
    }
    @media only screen and (max-width: 600px){
        .body{
            height: 105vh !important;
        }
        .container{
            margin-left:8% !important;
            width: 90% !important;
            height: 75vh !important;
        }
        span{
            width: 100% !important;
        }
    }
</style>

<body class="body">
    <div class="row">
        <div class="col-12">
            <?php
            include('../templates/header.php');
            ?>
        </div>
    </div>

    <div class="container modal-content" style="align-content: center; width: 60%;">
        <div class="col" style="width: 70%; margin-left:20%; margin-top: 4%;">
            <div class="input-group input-group-sm mb-3" style="padding:3%; width:80%;">
                <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de tarea</span>
                <input type="text" class="form-control" id="tipo_tarea" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
            </div>

            <div class="input-group input-group-sm mb-3" style="padding:3%; width:80%;">
                <span class="input-group-text" id="inputGroup-sizing-sm">Trabajador</span>
                <input type="text" class="form-control" id="traba_tarea" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
            </div>

            <div class="input-group input-group-sm mb-3" style="padding:3%; width:80%;">
                <span class="input-group-text" id="inputGroup-sizing-sm">Día</span>
                <input type="text" class="form-control" id="dia_tarea" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
            </div>

            <div class="input-group input-group-sm mb-3" style="padding:3%; width:80%;">
                <span class="input-group-text" id="inputGroup-sizing-sm">Horario</span>
                <input type="text" class="form-control" id="horario_tarea" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
            </div>

            <div class="input-group input-group-sm mb-3" style="padding:3%; width:80%;">
                <span class="input-group-text" id="inputGroup-sizing-sm">Lugar</span>
                <input type="text" class="form-control" id="lugar_tarea" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
            </div>

            <div class="row">
                <div class="col-5"><button type="submit" onclick="addTasks()" class="btn btn-secondary">Añadir tarea</button></div>
                <div class="col-2"></div>
                <!-- <div class="col-5"><button type="submit" onclick="findTasks()" class="btn btn-secondary">ver histórico</button></div> -->
            </div>

        </div>



        <!-- Modal que muestra la tabla con los resultados de la busqueda -->
        <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-target="#AvanzaModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Historico de tareas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="parent_modal" ></div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="refreshModal()">Cerrar</button>
      </div>
    </div>
  </div>
</div> -->



    </div>


</body>

</html>
<script>
    function refreshModal() {
        window.location.reload();
    }
</script>
<script src="../../JS/addTasks/addTasks.js"></script>
<script src="../../JS/addTasks/findHistoricTasks.js"></script>
