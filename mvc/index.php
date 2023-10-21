<?php include "inc/header.php"; ?>

<?php 
include_once "system/libs/Main.php";
include_once "system/libs/DController.php";
include_once "system/libs/load.php";

$url = isset($_GET['url']) ? $_GET['url']: NULL;


if($url != NULL){
    $url = rtrim($url,'/');
    $url = explode("/", filter_var($url,FILTER_SANITIZE_URL));
}else{
    unset($url);
}

if(isset($url[0])){
include include 'app/controllers/'.$url[0].'.php';
$ctlr = new $url[0]();

if(isset($url[2])){
    $ctlr->$url[1]($url[2]);
}else{
    if(isset($url[1])){
        $ctlr->$url[1]($url[2]);  
    }else{

    }

}
}else{
    include 'app/controllers/index.php';
    $ctlr = new Index();
    $ctlr->home();

}






?>

















<?php include "inc/footer.php"; ?>