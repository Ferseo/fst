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
                    <span class="input-group-text" id="inputGroup-sizing-sm">Tipo</span>
                    <input type="text" class="form-control" id="dni" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>
             
                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                    <input type="text" class="form-control" id="nombre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >      
                    </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Apellidos</span>
                    <input type="text" class="form-control" id="apellidos" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Alias</span>
                    <input type="text" class="form-control" id="user" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Contraseña</span>
                    <input type="password" class="form-control" id="pass" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Puesto</span>
                    <input type="text" class="form-control" id="categoria" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Año de ingreso</span>
                    <input type="text" class="form-control" id="anio_ingreso" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Direccion</span>
                    <input type="text" class="form-control" id="direccion" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Teléfono</span>
                    <input type="text" class="form-control" id="telefono" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" >
                    </div>
                 </div>

            </div>
</body>
</html>