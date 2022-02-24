<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <title>Añadir Tareas</title>
</head>
<style>
    .body {
        /* background-color: #353535; */
        background-color: #1f1f1f;
        width: 99%;
    }

    .container {
        height: 70vh;

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
    <div class="row">
        <div class="col-2">
            <div class="col">
                <button type="submit" class="btn btn-secondary" style="margin: 5%; margin-left:40%;">Añadir track</button>
            </div>

        </div>
        <div class="col-8">
            <div class="container modal-content" style="align-content: center; width: 100%;">
                <!-- CUERPOR DEL CONTENEDOR DONDE SE ACUMULAN LOS TRACK Y LOS INTERVALOS -->
            </div>
        </div>
        <div class="col-2">
            <div class="col">
                <button type="submit" class="btn btn-secondary" style="margin: 5%;">Intervalo tiempo</button>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- <audio src="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3" id="audio"></audio> -->
        
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>