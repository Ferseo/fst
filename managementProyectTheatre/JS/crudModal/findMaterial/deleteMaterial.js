/**
 * Funcion que recibiendo el elemento interactuado en el html
 * saca su id y lo introduce como parámetro para la consulta que elimina el registro
 * en cuestión.
 * 
 */
function deleteMaterial(data){
        var count = data.id;
        var option = document.getElementById("selectedOption").value;
        $.ajax({
            type: "POST",
            url: "/fst/managementProyectTheatre/controller/deleteMaterial.php",
            data: {
               "option": option,
                "count":count
            },
            success: function(response) {
                alert("Borrado satisfactorio");
               window.location.reload();
            }
        })
   }