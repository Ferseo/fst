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