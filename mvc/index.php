<?php include "inc/header.php"; ?>

<?php 
include_once "system/libs/Main.php";
include_once "system/libs/DController.php";

$url = isset($_GET['url']) ? $_GET['url']: NULL;

$url = rtrim($url,'/');
$url = explode("/",$url);


if($url[0]){
include include 'app/controllers/'.$url[0].'.php';
$ctlr = new $url[0]();

if($url[2]){
    $ctlr->$url[1]($url[2]);

}
}else{
    
}






?>

















<?php include "inc/footer.php"; ?>