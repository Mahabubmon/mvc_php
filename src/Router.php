<?php 
namespace App\Mvc;

class Router{
    protected  $router = [];

    public function addRouter($router,$controller,$action){
        $this->router[$router] = ['controller'=> $controller, 'action'=>$action];
    }
}



?>