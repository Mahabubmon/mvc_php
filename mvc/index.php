<?php include "inc/header.php"; ?>

<?php 
include_once "system/libs/Main.php";
include_once "system/libs/DController.php";

$url = $_GET['url'];
$url = rtrim($url,'/');
$url = explode("/",$url);



include 'app/controllers/'.$url[0].'.php';

$mahabub = new $url[0]();
    


?>

















<?php include "inc/footer.php"; ?>