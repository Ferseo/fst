function deleteLend(data){
    var count = data.id;
    $.ajax({
        type: "POST",
        url: "../../controller/deleteLend.php",
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
}