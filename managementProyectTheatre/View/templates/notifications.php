<?php
include_once '../../APIquerys/apiQuerys.php';
$api = new apiQuerys;
$nombre = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
$date = date("j-n-Y");
$dataTask = [];
$dataTask = $api->getTask($nombre,$date);
print_r($dataTask);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .contentNofifications{
        margin-left: 2%;
        text-align: center;
        background-color: #bdbbb0;
        border: 10px solid #8a897c;
        height: 500px;
    }
</style>
<div class="row" style="padding: 0;">
    <div class="col-4 contentNofifications" style="padding: 0;" id="containerTable">
     
    </div>
</div>
<script>
//Aquí se supone que pasamos del array dataTask de php con los datos traidos de la bd, a el array de JavaScript, pero hasta que no resolvamos el problema de la consulta no podemos comprobarlo.
    $data = [];
    $data = '<?=$dataTask?>';
    
    function activateNotifications($data){
        var container = document.getElementById("containerTable");
        var table = document.createElement("table");
        var tbody = document.createElement("tbody");
        for(var i = 0; i < $data.length; i++){
            var row = document.createElement("tr");
            var textNotification = document.createTextNode($data[i]);
            row.appendChild(textNotification);
            tbody.appendChild(row);
        }
        table.appendChild(tbody);
        container.appendChild(table);
    }


   window.onload=activateNotifications($data);
</script>