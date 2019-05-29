<?php

use App\Models\Users;

$router->add('GET', '/', function() use ($container){    
    return 'estamos na home';
});

$router->add('GET', '/users/(\d+)', function($paramns) use ($container){
    $user = new Users($container);
    $data = $user->get($paramns[1]);
    
    return 'estamos listando o projeto de id: ' . $data['name'];
});