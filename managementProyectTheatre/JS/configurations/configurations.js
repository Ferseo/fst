function editInput(data){
    var nombre = document.getElementById("nombre").value;
    var colunm = data.id;
    var value = document.getElementById(colunm).value ;
    
    $.ajax({
        type: "POST",
        url: "../../controller/editConfigurations.php",
        data: {
            "nombre":nombre,
           "colunm":colunm,
           "value":value
        },
        success: function(response) {
           window.location.reload();
        }
    })
    //  console.log(colunm);
    //  console.log(value);
    // console.log(data);
}