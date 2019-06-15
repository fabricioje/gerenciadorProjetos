<?php

$app->middleware('before', function($c){
    session_start();
});
$app->middleware('before', function($c){
    header('Content-Type: text/plain');
});
$app->middleware('before', function($c){
    echo ' after ';
});
$app->middleware('before', function($c){
    echo 'after 2';
});