<?php

use App\Router;
use App\Controllers\UserController;

$router = new Router();

$router->addRoute('/', UserController::class, 'index');
    
