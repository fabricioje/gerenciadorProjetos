<?php

$app->addMiddleware('before', function($c){
    session_start();
});
$app->addMiddleware('before', function($c){
    header('Content-Type: text/plain');
});
$app->addMiddleware('before', function($c){
    echo ' after ';
});
$app->addMiddleware('before', function($c){
    echo 'after 2';
});