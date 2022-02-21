<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <title>Registro de Usuario</title>
</head>
<style>
    .body {
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
    <div class="row">
        <div class="col-2">
            <ul class="modal-content" style="font-weight: bold; margin-left:10%;margin-top:2%;">
                <li id="fatherList"><a class="dropdown-item" href="#">Mi perfil</a></li>
                <li><a class="dropdown-item" href="#">Ajustes de audio</a></li>
                <li><a class="dropdown-item" href="#">Sincr. Diputación</a></li>
                <li><a class="dropdown-item" href="#">Ajustes de Calendario</a></li>
                <li><a class="dropdown-item" href="#">Notificaciones</a></li>
            </ul>
        </div>
        <div class="col-10">
            <div class="container modal-content" style=" width:80%;">
            <h3>Registro de usuario</h3>
                <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">DNI</span>
                    <input type="text" class="form-control" id="dni" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                    <input type="text" class="form-control" id="nombre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Apellidos</span>
                    <input type="text" class="form-control" id="apellidos" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Alias</span>
                    <input type="text" class="form-control" id="user" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Contraseña</span>
                    <input type="password" class="form-control" id="pass" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Puesto</span>
                    <input type="text" class="form-control" id="categoria" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Año de ingreso</span>
                    <input type="text" class="form-control" id="anio_ingreso" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Direccion</span>
                    <input type="text" class="form-control" id="direccion" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Teléfono</span>
                    <input type="text" class="form-control" id="telefono" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">

                </div>

                    <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                    <button type="submit" onclick="registerNewUser()" class="btn btn-secondary">Registrar</button>
                    </div>
            </div>
        </div>

    </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../../JS/registerNewUser/registerNewUser.js"></script>