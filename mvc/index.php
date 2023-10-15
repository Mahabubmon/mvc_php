<?php include "inc/header.php"; ?>

<?php 
include_once "system/libs/Main.php";

$url = $_GET['url'];
$url = rtrim($url,'/');
$url = explode("/",$url);

echo $controller = $url[0]."<br/>"; 
echo  $method = $url[1]."<br/>";
echo  $param = $url[2]."<br/>";
    


?>

















<?php include "inc/footer.php"; ?>