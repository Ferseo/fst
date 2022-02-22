/**
 * Funccion que es activada con un eveto, se encarga de recoger el nombre del usuario
 * logueado del input correspondiente, recoge en la variable colunm el id del elemento que 
 * activa la funcion, y lo utiliza a su vez, para recoger el valor del campo a modificar, por 
 * último lo envia al archivo controlador que ejecuta la consulta. Por ultimo si se efectua 
 * respuesta recarga la pagina.
 */
function editInput(data){
    var nombre = document.getElementById("nombre").value;
    var colunm = data.id;
    var value = document.getElementById(colunm).value ;
    //   console.log(colunm);
    //  console.log(value);
    // console.log(nombre);
    $.ajax({
        type: "POST",
        url: "../../controller/editConfigurations.php",
        data: {
            "nombre":nombre,
           "colunm":colunm,
           "value":value
        },
        success: function(response) {
           window.location.reload();
        }
    })
   
}