
function deleteMaterial(){
        var count = $(".deleteMaterial").attr('id');
        var option = document.getElementById("selectedOption").value;
        
        console.log(count, option);

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
               //window.location.reload();
            }
        })

   }
// $('.deleteMaterial').click(function() {
//     var div = $(this);
//     var count = div.attr('id');
//     var option = document.getElementById("selectedOption").value;
//     console.log(count, option);
//     $.ajax({
//                     type: "POST",
//                     url: "/fst/managementProyectTheatre/controller/deleteMaterial.php",
//                     data: {
//                        "option": option,
//                         "count":count
//                     },
//                     success: function(response) {
//                         //count = "";
//                         //console.log(response);
//                         alert("Borrado satisfactorio");
//                        window.location.reload();
//                     }
//                 })
// });