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
    <title>Registro de Usuario</title>
</head>
<style>
    .body {
        background: url("../../img/background-image/auditorio.png");
        background-repeat: no-repeat;
        background-size: 1366px auto;
        width: 99%;
    }

    .span {
        width: 90%;
    }

    .box {
        margin: 0px;
        padding: 0px;

        /*display: inline !important;*/
        float: left;
        height: auto;
    }

    .modal-content {
        display: block !important;
    }

    .rigth {
        margin-top: 5%;
        border: 1px solid black;
    }

    .row>p {
        width: 70%;
    }

    .row>button {
        width: 30%;
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
        <!-- <div class="col"> -->
        <div class="container modal-content" style=" width:80%; text-align:center;">

            <div class="col-7 box">
                <h3>Registro de usuario</h3>
                <div class="input-group input-group-sm mb-3" style="padding:1%; width:75%; ">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 20%;">DNI</span>
                    <input type="text" class="form-control" id="dni" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:75%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 20%;">Nombre</span>
                    <input type="text" class="form-control" id="nombre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required>
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:75%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 20%;">Apellidos</span>
                    <input type="text" class="form-control" id="apellidos" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required>
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:75%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 20%;">Alias</span>
                    <input type="text" class="form-control" id="user" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required>
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:75%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 20%;">Contraseña</span>
                    <input type="password" class="form-control" id="pass" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:75%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 20%;">Puesto</span>
                    <input type="text" class="form-control" id="categoria" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:75%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 20%;">Año ingreso</span>
                    <input type="text" class="form-control" id="anio_ingreso" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:75%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 20%;">Direccion</span>
                    <input type="text" class="form-control" id="direccion" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                </div>

                <div class="input-group input-group-sm mb-3" style="padding:1%; width:75%;">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 20%;">Teléfono</span>
                    <input type="text" class="form-control" id="telefono" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">

                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-5"></div>
                    <div class="col-5">
                        <div class="input-group input-group-sm mb-3" style="padding:1%; width:75%;">
                            <button type="submit" onclick="registerNewUser()" class="btn btn-secondary">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5 box ">
                <h5>Usuarios registrados</h5>
                <div id="parent" class="rigth">

                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../../JS/registerNewUser/registerNewUser.js"></script>
<script src="../../JS/registerNewUser/userManagement.js"></script>
<script src="../../JS/registerNewUser/deleteUser.js"></script>