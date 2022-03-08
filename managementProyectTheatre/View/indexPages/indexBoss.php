<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Jefes</title>
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
    <div class="row">
        <div class="col-9 crudContent">
            <?php
            include('../templates/crudModal.php');
            ?>
        </div>
        <div class="col-3 notificationsContent">
            <?php
            include('../templates/notifications.php')
            ?>
        </div>

        </div>
</body>


</html>