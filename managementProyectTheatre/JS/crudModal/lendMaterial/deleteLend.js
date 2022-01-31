function deleteLend(){
     var count = $(".deleteLend").attr("id");
    $.ajax({
        type: "POST",
        url: "/fst/managementProyectTheatre/controller/deleteLend.php",
        data: {
            "count":count
        },
        success: function(response) {
            //count = "";
            //console.log(response);
            alert("Borrado satisfactorio");
           // window.location.reload();
        }
    })
}