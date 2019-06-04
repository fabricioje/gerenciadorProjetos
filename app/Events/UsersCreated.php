<?php

namespace App\Events;

class UsersCreated{

    public function __invoke($e){

        $event = $e->getName();
        $params = $e->getParams();

        echo sprintf('Disparado evendo "%s", com os paramentros "%s"', $event, json_encode($params));
    }
}