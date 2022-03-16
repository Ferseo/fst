<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../../JS/jquery.js"></script>
    <title>Histórico materiales prestados</title>
</head>
<style>
    .body{
        /* background-color: #353535; */
        background-color: #1f1f1f;
        width: 99%;
    }
    .container{
        /* height: 70vh; */
        height: auto;
    }
    
    .border{
        border: 1px solid black !important;
    }
    .col{
        width: 1%;
        padding: 0px !important;
    }
    #bold{
        font-weight: bold;
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
    
    <div class="container modal-content" id="container" style="align-content: center; width: 80%;text-align:center;">
       <h2>Histórico de materiales prestados</h2>          
           
    </div>

           
</body>
</html>
<script src="../../JS/historicDatas/historicLend/findHistoricLend.js"></script>
<script src="../../JS/historicDatas/historicLend/deleteLend.js"></script>