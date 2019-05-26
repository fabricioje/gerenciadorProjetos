<?php

require __DIR__.'/vendor/autoload.php';

new SON\Framework\Router;
new App\Module;


$router = $_SERVER['PATH_INFO'] ?? '/';

if ($router == '/') {
    echo 'estamos na home';
}elseif ($router == '/projects') {
    echo 'estamos listando projetos';
}else {
    echo 'Página não entrada';
}