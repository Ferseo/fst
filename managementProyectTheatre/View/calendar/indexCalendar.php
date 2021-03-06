<?php
session_start(['read_and_close'  => true,]);
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
    .body {
        width: 99%;
        background: url("../../img/background-image/auditorio1_mo.jpg");
        background-repeat: no-repeat;
        background-size: auto;
    }
    @media only screen and (max-width: 600px){
        .body{
            height: 105vh !important;
        }
        .container{
            /* margin-left:8% !important; */
            margin: 0px !important;
            padding: 0px !important;
            width: 100% !important;
            height: 75vh !important;
            font-size: 2% !important;
        }
        .map{
            margin: 0px !important;
            width: 100% !important;
            padding: 0px !important;
        }
        .hidden_column{
            display:none !important;
        }
        .button{
            margin-top: 7% !important;
            margin-left:3% !important;
        }
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

    <div class="row container" style="width: 80%;">
        <iframe class="map" src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Europe%2FMadrid&src=dGVhdHJvYXVkaXRvcmlvdmljYXJAZ21haWwuY29t&color=%23C0CA33" style="border: 0; margin-left: 15%; margin-top: 3%; margin-bottom: 3%" width="600" height="570" frameborder="1" scrolling="no"></iframe>
    </div>
    <div class="row" id="hidden" style="margin-bottom: 4%;">
        <div class="col-10 hidden_column"></div>
        <div class="col-2 button" id="parent"></div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function activeButton() {
        var categoria = <?php echo json_encode($credencial); ?>;
        if (categoria === "administrador" || categoria === "jefe") {
            var parent = document.getElementById("parent");
            var button = document.createElement("button");
            button.className = "btn btn-primary";
            var a = document.createElement("a");
            a.href = "https://calendar.google.com/calendar/u/0/r?tab=rc";
            var text = document.createTextNode("A??adir evento");
            a.appendChild(text);
            a.style = "color: white; text-decoration: none;";
            button.appendChild(a);
            parent.appendChild(button);

        } else {
            var hidden = document.getElementById("hidden");
            hidden.hidden();
        }
    }
    window.onload = activeButton();
</script>
            <?php
            include('../templates/header.php');
            ?>
        </div>

    </div>

    <div class="row container" style="width: 80%;">
        <iframe class="map" src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Europe%2FMadrid&src=dGVhdHJvYXVkaXRvcmlvdmljYXJAZ21haWwuY29t&color=%23C0CA33" style="border: 0; margin-left: 15%; margin-top: 3%; margin-bottom: 3%" width="600" height="570" frameborder="1" scrolling="no"></iframe>
    </div>
    <div class="row" id="hidden" style="margin-bottom: 4%;">
        <div class="col-10 hidden_column"></div>
        <div class="col-2 button" id="parent"></div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function activeButton() {
        var categoria = <?php echo json_encode($credencial); ?>;
        if (categoria === "administrador" || categoria === "jefe") {
            var parent = document.getElementById("parent");
            var button = document.createElement("button");
            button.className = "btn btn-primary";
            var a = document.createElement("a");
            a.href = "https://calendar.google.com/calendar/u/0/r?tab=rc";
            var text = document.createTextNode("A??adir evento");
            a.appendChild(text);
            a.style = "color: white; text-decoration: none;";
            button.appendChild(a);
            parent.appendChild(button);

        } else {
            var hidden = document.getElementById("hidden");
            hidden.hidden();
        }
    }
    window.onload = activeButton();
</script>
