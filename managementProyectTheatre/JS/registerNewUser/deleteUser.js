function deleteUser(data){
    if(confirm("¿Desea eliminar el usuario?")){
        var id = data.id;
        $.ajax({
            type: "POST",
            url: "../../controller/deleteUser.php",
            data: {
                "id":id     
            },
            success: function(response) {
            if(!response){
                alert("Algo ha fallado");
            }else{
                window.location.reload();
            }
            }
        })
    }else{
        window.reload();
    }
   
}