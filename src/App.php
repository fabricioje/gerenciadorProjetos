<?php

namespace SON\Framework;

use SON\Framework\Response;
use SON\Framework\Exceptions\HttpException;

class App{

    private $router;
    private $container;
    private $middlewares = [
        'before' => [],
        'after' => [],
    ];

    public function __construct($router, $container)
    {
        $this->container = $container;
        $this->router = $router;
    }

    public function addMiddleware($on, $callback){

        $this->middlewares[$on][] = $callback;
    }

    public function run(){

        try {
            $result = $this->router->run();
        
            $response = new Response;
            $params = [
                'container' => $this->container,
                'params' => $result['action']
            ];
            
            foreach ($this->middlewares['before'] as $middleware) {
                $middleware($this->container);
            }
            
            $response($result['action'], $params);
        
            foreach ($this->middlewares['after'] as $middleware) {
                $middleware($container);
            }
        
        } catch (HttpException $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}