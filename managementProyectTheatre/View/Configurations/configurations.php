<?php
session_start(['read_and_close'  => true,]);
$user = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
// header("Allow: GET, POST, OPTIONS, PUT, DELETE");
// $method = $_SERVER['REQUEST_METHOD'];
// if($method == "OPTIONS") {
//     die();
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Ajustes</title>
</head>
<style>
    .body {
        width: 99%;
        background: url("../../img/background-image/auditorio1_mo.jpg");
        background-repeat: no-repeat;
        background-size: auto;
    }

    #sincroDipu {
        height: 80vh;
    }

    iframe {
        width: 100%;
        height: 80vh;
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
                <li id="fatherList"><a class="dropdown-item" onclick="miPerfil()">Mi perfil</a></li>
                <li><a class="dropdown-item" onclick="sincroDipu()">Sincr. Diputación</a></li>
                <li><a class="dropdown-item" href="#">Ajustes de audio</a></li>
                <li><a class="dropdown-item" href="#">Ajustes de Calendario</a></li>
                <li><a class="dropdown-item" href="#">Notificaciones</a></li>
            </ul>
        </div>
        <div class="col-10">
            <!-- div contenedor para todas las opciones -->
            <div class="container modal-content" style=" width:80%;" id="container">




                <!-- div contenedor donde comienza la opcion de mi perfil -->
                <div id="miPerfil">
                    <div class="col ">
                        <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                            <span class="input-group-text" id="inputGroup-sizing-sm">DNI</span>
                            <input type="text" class="form-control" id="dni" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                            <button type="submit" class="btn" onclick="editInput(this)" id="dni">📝</button>
                        </div>

                        <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                            <input type="text" class="form-control" id="nombre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                            <button type="submit" class="btn" onclick="editInput(this)" id="nombre">📝</button>
                        </div>

                        <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Apellidos</span>
                            <input type="text" class="form-control" id="apellidos" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                            <button type="submit" class="btn" onclick="editInput(this)" id="apellidos">📝</button>
                        </div>

                        <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Alias</span>
                            <input type="text" class="form-control" id="user" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                            <button type="submit" class="btn" onclick="editInput(this)" id="user">📝</button>
                        </div>

                        <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Contraseña</span>
                            <input type="password" class="form-control" id="pass" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                            <button type="submit" class="btn" onclick="editInput(this)" id="pass">📝</button>
                        </div>

                        <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Puesto</span>
                            <input type="text" class="form-control" id="categoria" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                            <button type="submit" class="btn" onclick="editInput(this)" id="categoria">📝</button>
                        </div>

                        <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Año de ingreso</span>
                            <input type="text" class="form-control" id="anio_ingreso" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                            <button type="submit" class="btn" onclick="editInput(this)" id="anio_ingreso">📝</button>
                        </div>

                        <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Direccion</span>
                            <input type="text" class="form-control" id="direccion" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                            <button type="submit" class="btn" onclick="editInput(this)" id="direccion">📝</button>
                        </div>

                        <div class="input-group input-group-sm mb-3" style="padding:1%; width:80%;">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Teléfono</span>
                            <input type="text" class="form-control" id="telefono" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
                            <button type="submit" class="btn" onclick="editInput(this)" id="telefono">📝</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    /**
     * Funcion que se inicia con la pagina, recoge la variable global de php con el usuario
     * logueado, y lo envia al controlador para ejecutar la consulta, una vez obtenemos 
     * respuesta con los datos deseados los colocamos en los inputs     *
     * @return response
     */
    function dateSetting() {
        var user = <?php echo json_encode($user) ?>;
        $.ajax({
            type: "POST",
            url: "../../controller/configurationsController.php",
            data: {
                "user": user
            },
            success: function(response) {
                var data = $.parseJSON(response);
                var parentDni = document.getElementById("dni");
                parentDni.setAttribute("value", data[0].dni);
                var parentNombre = document.getElementById("nombre");
                parentNombre.setAttribute("value", data[0].nombre);
                var parentApe = document.getElementById("apellidos");
                parentApe.setAttribute("value", data[0].apellidos);
                var parentUser = document.getElementById("user");
                parentUser.setAttribute("value", data[0].user);
                var parentPass = document.getElementById("pass");
                parentPass.setAttribute("value", data[0].password);
                var parentCat = document.getElementById("categoria");
                parentCat.setAttribute("value", data[0].categoria);
                var parentAnio = document.getElementById("anio_ingreso");
                parentAnio.setAttribute("value", data[0].anio_ingreso);
                var parentDire = document.getElementById("direccion");
                parentDire.setAttribute("value", data[0].direccion);
                var parentTel = document.getElementById("telefono");
                parentTel.setAttribute("value", data[0].telefono);
                //window.location.reload();
            }
        });
    }
    window.onload = dateSetting();
</script>
<!-- <script>
    function miPerfil(){
    container_dipu = document.getElementById("sincroDipu");
    container_dipu.style.display = "none";   
}
window.onload = miPerfil();
</script> -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../../JS/configurations/configurations.js"></script>
<script src="../../JS/configurations/selectedOptionMenu.js"></script>