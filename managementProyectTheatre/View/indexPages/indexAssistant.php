<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Ayudante</title>
</head>
<style>
    .body {
        width: 99%;
        background: url("../../img/background-image/auditorio1_mo.jpg");
        background-repeat: no-repeat;
        background-size: auto;
    }
     @media only screen and (max-width: 600px){
    h1{
        display: none;
    }
    .global_row{
        flex-direction: column;
    }
    .spanAdd{
        width:100% !important;
    }
    .spanLend{
        width:100% !important;
        height: 50% !important
    }
    .spanFind{
        width:100% !important;
        height: 60% !important;
    }
    .label_tipo{
        width:80% !important;
    } 
    .label_tipo_1{
        width:70% !important;
    } 
    .hidden_button{
        display: none; 
    }
    .add_btn{
        float:right !important;
        margin-right:5% !important;
    }
    .observ{
        width:65% !important;
        margin-right: 0px !important;
    }
    .inputLend{
        width:100% !important;  
    }
    .content_lend{
        margin-left:17% !important;
    }
    .content_add{
        margin-left:10% !important;
    }
    .crudContent{
        width:100%;
        margin-bottom:10% !important;
    }
    .navContent{
        height: 100vh !important;
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
