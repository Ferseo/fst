<?php
session_start(); 
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$count = $_POST['count'];
$text = $_POST['text'];
$user = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
print_r($user);
print_r($count);
print_r($text);
$return = $conn->returnedLend($count,$text,$user);
print_r($return);
?>