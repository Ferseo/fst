function deleteTask(data){
   if(confirm("¿Desea eliminar este registro de forma permanente?")){
    var count = data.id;
    $.ajax({
        type: "POST",
        url: "../../controller/deleteTask.php",
        data: { 
            "count":count
        },
        success: function(response) {
            if(response){
                window.location.reload();
            }else{
                alert("Error: No se ha podido eliminar el material");
            }
        }
    });
   }else{
       window.reload();
   }
}