function registerNewUser(){
    var dni = document.getElementById('dni').value;
    var nombre = document.getElementById('nombre').value;
    var apellidos = document.getElementById('apellidos').value;
    var alias = document.getElementById('user').value;
    var password = document.getElementById('pass').value;
    var puesto = document.getElementById('categoria').value;
    var anio_ingreso = document.getElementById('anio_ingreso').value;
    var direccion = document.getElementById('direccion').value;
    var telefono = document.getElementById('telefono').value;
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