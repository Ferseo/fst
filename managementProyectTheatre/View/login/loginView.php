<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JS whit boostraps -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
        .title-login{
            color: gray;
        }

    </style>
    <title>Gestión Inventario Teatro</title>
</head>
<body>
<div class="container-fluid vh-100" style="margin-top:300px">
            <div class="" style="margin-top:200px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="title-login">Gestión Inventario Teatro Auditorio Vícar</h3>
                        </div>
                        <form action="/fst/managementProyectTheatre/controller/procesingLogin.php" method="POST">
                            <div class="p-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-secondary"><img src="./img/icons/usuario.png" alt="" srcset=""><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" name="user" class="form-control" placeholder="Nombre de usuario.. ">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-secondary"><img src="./img/icons/password.png" alt="" srcset=""><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Contraseña...">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Recordar contraseña
                                    </label>
                                </div>
                                <button class="btn btn-secondary text-center mt-2" type="submit">
                                    Iniciar Sesión
                                </button>
                                <p class="text-center mt-5">
                                    <span class="text-secondary">Create & Design by @ferseo91</span>
                                </p>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>