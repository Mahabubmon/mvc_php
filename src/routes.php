<?php

use App\Mvc\Router;
use App\Mvc\Controllers\UserController;

$router = new Router();

$router->addRoute('/', UserController::class, 'index');
    
