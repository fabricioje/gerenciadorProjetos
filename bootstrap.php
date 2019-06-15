<?php
use SON\Framework\App;

require __DIR__.'/vendor/autoload.php';

$router = new SON\Framework\Router;

require __DIR__ . '/config/containers.php';
require __DIR__ . '/config/events.php';

$app = new SON\Framework\App($container);

$router = $app->getRouter();

require __DIR__ . '/config/middlewares.php';
require __DIR__ . '/config/routes.php';

$app->run();

