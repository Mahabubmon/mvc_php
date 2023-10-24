<?php 
namespace App\Mvc;

class Router{
    protected  $router = [];

    public function addRouter($router,$controller,$action){
        $this->router[$router] = ['controller'=> $controller, 'action'=>$action];
    }

    public function dispatch($uri) {
        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $action = $this->routes[$uri]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            throw new \Exception("No route found for URI: $uri");
        }
    }
}



?>