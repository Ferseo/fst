<?php
$url = "https://localhost:3306";
$param = array(
    'user' => $_POST['user'],
    'password' => $_POST['password']
);

try{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($param));
    $res = curl_exec($ch);
    $resDecode = json_decode($res);
    curl_close($ch);
}catch(Exception $e){
    echo $e;
}


?>