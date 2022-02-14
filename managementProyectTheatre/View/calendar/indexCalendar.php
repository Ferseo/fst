<?php
session_start();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
$credencial = isset($_SESSION['categoria']) ? $_SESSION['categoria'] : 'Categoria';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
</head>
<style>
    .body{
        /* background-color: #353535; */
        background-color: #1f1f1f;
        width: 99%;
    }
</style>
<body class="body">

   <div class="row">
        <div class="col-12">
        <?php
        include('../templates/header.php');
        ?>
        </div>
        
    </div>
    <div class="row" id="hidden">
    <div class="col-10"></div>
    <div class="col-2"  id="parent"></div>
    </div>
    <div class="row" style="width: 80%;">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Europe%2FMadrid&src=dGVhdHJvYXVkaXRvcmlvdmljYXJAZ21haWwuY29t&color=%23C0CA33" style="border: 0; margin-left: 15%; margin-top: 3%; margin-bottom: 3%" width="600" height="570" frameborder="1" scrolling="no"></iframe>
    </div>
</body>
</html>
<script>
    function activeButton(){
        var categoria = <?php echo json_encode($credencial); ?>;
        if(categoria === "administrador" || categoria === "jefe"){
            var parent = document.getElementById("parent");
            var button = document.createElement("button");
            button.className = "btn btn-primary";
            var a = document.createElement("a");
            a.href = "https://calendar.google.com/calendar/u/0/r?tab=rc";
            var text = document.createTextNode("Añadir evento");
            a.appendChild(text);
            a.style = "color: white; text-decoration: none;";
            button.appendChild(a);
            parent.appendChild(button);

        }else{
            var hidden = document.getElementById("hidden");
            hidden.hidden();
        }
    }
    window.onload = activeButton();
</script>