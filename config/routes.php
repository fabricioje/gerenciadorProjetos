<?php

$router->add('GET', '/', function() use ($container){
    $pdo = $container['db'];
    var_dump($pdo);
    return 'estamos na home';
});

$router->add('GET', '/projects/(\d+)', function($paramns){
    return 'estamos listando o projeto de id: ' . $paramns[1];
});