<?php

$router->add('GET', '/', function() use ($container){    
    return 'estamos na home';
});

$router->add('GET', '/users/(\d+)', '\App\Controllers\UsersController::show');