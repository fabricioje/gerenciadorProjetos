<?php

$middlewares = [
    'before' => [
        function($c){
            session_start();
        },
        function($c){
            header('Content-Type: text/plain');
        }
    ],
    'after' => [
        function($c){
            echo 'after';
        },
        function($c){
            echo 'after 2';
        }
    ],
];