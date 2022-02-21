function registerNewUser(){
    var dni = document.getElementById('dni');
    var nombre = document.getElementById('nombre');
    var apellidos = document.getElementById('apellidos');
    var alias = document.getElementById('user');
    var password = document.getElementById('pass');
    var puesto = document.getElementById('categoria');
    var anio_ingreso = document.getElementById('anio_ingreso');
    var direccion = document.getElementById('direccion');
    var telefono = document.getElementById('telefono');
    $.ajax({
        type: "POST",
        url: "../../controller/registerNewUser.php",
        data: {
            "dni":dni,
            "nombre":nombre,
            "apellidos":apellidos,
            "alias":alias,
            "password":password,
            "puesto":puesto,
            "anio_ingreso":anio_ingreso,
            "direccion":direccion,
            "telefono":telefono
        },
        success: function(response) {
            if(!response){
                alert("Algo falló");
            }else{
                alert("Se añadio el usuario");
                window.location.reload();
            }
           
        }
    })
}