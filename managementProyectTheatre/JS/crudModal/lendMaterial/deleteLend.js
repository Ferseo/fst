/**
 * Funcion que recibiendo el elemento interactuado en el html
 * saca su id y lo introduce como parámetro para la consulta que elimina el registro
 * en cuestión.
 * 
 */
function deleteLend(data){
     var count = data.id;
    $.ajax({
        type: "POST",
        url: "/fst/managementProyectTheatre/controller/deleteLend.php",
        data: {
            "count":count
        },
        success: function(response) {
            alert("Borrado satisfactorio");
            window.location.reload();
        }
    })
}