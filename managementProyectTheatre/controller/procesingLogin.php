<?php
include_once( '../connection/connection.php');
//include('../APIquerys/loginQueary.php');
include_once( '../APIquerys/loginQueary.php');
$queryLogin = new queryLogin;
$user = $_POST['user'];
$pass = $_POST['password'];
if($queryLogin->checkUser($user, $pass)){
    session_start();
    $data = $queryLogin->checkUser($user, $pass);
    $credencial = $data['categoria'];
    //print($credencial);
    if($credencial === "administrador"){
        echo "<script> alert('Bienvenido " . $user . " !!'); </script>";
                ?>
                        <script type="text/javascript">
                                window.location = "../View/indexPages/indexAdmin.php";
                        </script>
                <?php
    }else if($credencial === "jefe"){
        echo "<script> alert('Bienvenido " . $user . " !!'); </script>";
                ?>
                <script type="text/javascript">
                        window.location = "../View/indexPages/indexBoss.php";
                </script>
                <?php
    }else if($credencial === "ayudante"){
        echo "<script> alert('Bienvenido " . $user . " !!'); </script>";
                ?>
                <script type="text/javascript">
                        window.location = "../View/indexPages/indexAssistant.php";
                </script>
                <?php
    }
}else{
    echo "<script> alert('⚠️  ⚠️ ¡¡ERROR!! SUS CREDENCIALES NO SON CORRECTAS ⚠️ ⚠️⚠️  '); </script>";
    ?>
                <script type="text/javascript">
                        window.location = "../View/login/loginView.php";
                </script>
                <?php
}
?>