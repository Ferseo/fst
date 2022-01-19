<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Administrador</title>
</head>
<style>
    .navbarRow {

        margin: 0;
    }

    body {
        width: 1350px;
        height: 578.188px;
        margin-right: 0px;
    }
</style>

<body>
    <div class="row navbarRow">
        <?php
        include('../templates/header.php');
        ?>
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