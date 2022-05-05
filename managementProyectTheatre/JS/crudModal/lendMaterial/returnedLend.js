/**
 * Funcion que recibiendo el elemento interactuado en el html
 * saca su id y lo introduce como parámetro para la consulta que elimina el registro
 * en cuestión.
 * 
 */
function returnedLend(data){
     var count = data.id;
     var text = prompt("Estado del material a su llegada:", "Todo ok");
    //  if (text == null || text == "") {
    //     window.reload()
    //   } else {
        $.ajax({
            type: "POST",
            url: "../../../controller/returnedLend.php",
            data: {
                "count":count,
                "text":text
            },
            success: function(response) {
                // alert("Borrado satisfactorio");
                window.location.reload();
            }
        })
 
    //   }
  
}