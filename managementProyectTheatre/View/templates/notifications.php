<?php
include_once '../../APIquerys/apiQuerys.php';
$api = new apiQuerys;
$nombre = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
$date = date("j-n-Y");
$dataTask = $api->getTask($nombre,$date);
//print_r($dataTask);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .contentNofifications{
        width: 95%;
        margin-left: 2%;
        text-align: center;
        background-color: #bdbbb0;
        border: 10px double  #8a897c;
        height: 500px;
    }
    tr{
        background-color: #fff;
        border: 1px solid black;
        font-size: 0.95em;
        height: 80px;
        opacity: 85%;
    }
    .button{
        border: 1px solid #bdbbb0; /*anchura, estilo y color borde*/
        padding: 2px; /*espacio alrededor texto*/
        background-color: #bdbbb0; /*color botón*/
        color: #ffffff; /*color texto*/
        text-decoration: none; /*decoración texto*/
        text-transform: uppercase; /*capitalización texto*/
        font-family: 'Helvetica', sans-serif; /*tipografía texto*/
        border-radius: 50%; /*bordes redondos*/
        margin: 2%;
    }
</style>
<div class="row" style="padding: 0;">
    <div class="col-4 contentNofifications" style="padding: 0;" id="containerTable">
     
    </div>
</div>
<script>
    
    function activateNotifications(data){
        var container = document.getElementById("containerTable");
        var table = document.createElement("table");
        var tbody = document.createElement("tbody");
        for(var i = 0; i < data.length; i++){
            var row = document.createElement("tr");
            row.id = "item";
            var textNotification = document.createTextNode(data[i].tipoTarea + " | " + data[i].horarioTarea + " |  " + data[i].lugarTarea);
            var button = document.createElement("a");
            button.innerHTML = "x";
            //button.href = "../../controller/deleteNotification.php";
            button.className = "btn button delete";
            button.id= data[i].cod_tarea;
            row.appendChild(button);
            row.appendChild(textNotification);
            tbody.appendChild(row);
        }
        table.appendChild(tbody);
        container.appendChild(table);
    }
   window.onload=activateNotifications(<?php echo json_encode($dataTask);?>);

</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
                $(document).ready(function(){
                    $('.delete').on('click', function(e){
                        //console.log("va todo bien");
                        e.preventDefault();
                        var parent = $(this).parent().attr('id');
                        var count = $(this).atrr('id');
                        var dataString = 'item' + item;
                        //console.log(dataString);
                        $.ajax({
                            type:"POST",
                            url: "../../controller/deleteNotification.php",
                            data: {dataString},
                            success: function(response) {			
                            $('.contentNofifications').empty();
                            $('.contentNofifications').append(response).fadeIn("slow");
                            $('#'+parent).fadeOut("slow");
                        }
                        });
                    });
            });


/**function Eliminar(){
        $.ajax({
                type: "POST",
                url: "Eliminar.php",
                cache: false,
                data:,
                error:function(){
                    $("#resultado").html("Error");
                },
                beforeSend:function(){
                    $("#resultado").html("Cargando...");

                },
                success: function(okay){
                $('#tabla2').load('tabla.php');
                $("#resultado").html("Registro Eliminado");
                }

        });
    } */
</script>
