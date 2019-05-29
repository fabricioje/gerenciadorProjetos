<?php

$router->add('GET', '/', function() use ($container){    
    return 'estamos na home';
});

$router->add('GET', '/users/(\d+)', function($params) use ($container){
   return (new \App\Controllers\UsersController($container))->show($params[1]);
});