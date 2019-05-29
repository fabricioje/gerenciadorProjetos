<?php

require __DIR__.'/vendor/autoload.php';

$router = new SON\Framework\Router;

$router->add('GET', '/', function(){
    return 'estamos na home';
});

$router->add('GET', '/projects/(\d+)', function($paramns){
    return 'estamos listando o projeto de id: ' . $paramns[1];
});

try {
    echo $router->run();
} catch (\SON\Framework\Exceptions\HttpException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

