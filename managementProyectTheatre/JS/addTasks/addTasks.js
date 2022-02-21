function addTasks(){
    var tipo_tarea = document.getElementById("tipo_tarea").value;
    var traba_tarea = document.getElementById("traba_tarea").value;
    var dia_tarea = document.getElementById("dia_tarea").value;
    var horario_tarea = document.getElementById("horario_tarea").value;
    var lugar_tarea = document.getElementById("lugar_tarea").value;
    console.log(tipo_tarea);
    $.ajax({
        type: "POST",
        url: "../../controller/addTasks.php",
        data: {
            "tipo_tarea":tipo_tarea,
            "traba_tarea":traba_tarea,
            "dia_tarea":dia_tarea,
            "horario_tarea":horario_tarea,
            "lugar_tarea":lugar_tarea
        },
        success: function(response) {
            if(!response){
                alert("Algo falló");
            }else{
                alert("Se añadio la tarea");
                window.location.reload();
            }
           
        }
    })
}