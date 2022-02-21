<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Tareas</title>
</head>
<style>
    .body{
        /* background-color: #353535; */
        background-color: #1f1f1f;
        width: 99%;
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
                 <div class="col" style="width: 60%; margin-left:25%;">
                 <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de tarea</span>
                    <input type="text" class="form-control" id="tipo_tarea" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>
             
                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Trabajador</span>
                    <input type="text" class="form-control" id="traba_tarea" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >      
                    </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Día</span>
                    <input type="text" class="form-control" id="dia_tarea" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Horario</span>
                    <input type="text" class="form-control" id="horario_tarea" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Lugar</span>
                    <input type="password" class="form-control" id="lugar_tarea" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>

                    
                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <button type="submit">Añadir tarea</button>
                    </div>
                 </div>

            </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../../JS/addTasks/addTasks.js"></script>