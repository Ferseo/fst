
function deleteMaterial(){
        var option = document.getElementById("selectedOption").value;
        var count = $(".deleteMaterial").attr("id");
        $.ajax({
            type: "POST",
            url: "/fst/managementProyectTheatre/controller/deleteMaterial.php",
            data: {
               "option": option,
                "count":count
            },
            success: function(response) {
                //count = "";
                //console.log(response);
                alert("Borrado satisfactorio");
                window.location.reload();
            }
        })

   }
