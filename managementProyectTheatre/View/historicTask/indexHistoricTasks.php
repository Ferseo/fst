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
    <title>Histórico de Tareas</title>
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
        overflow-y: scroll;
        /* height: auto; */
    }

    .border {
        border: 1px solid black;
    }

    .col {
        width: 1%;
        padding: 0px !important;
    }

    #bold {
        font-weight: bold;
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

    <div class="container modal-content" id="container" style="align-content: center; width: 80%;text-align:center;">
        <h2>Histórico de tareas realizadas</h2>

    </div>


</body>

</html>
<script src="../../JS/historicDatas/historicTask/findHistoricTasks.js"></script>
<script src="../../JS/historicDatas/historicTask/deleteTasks.js"></script>