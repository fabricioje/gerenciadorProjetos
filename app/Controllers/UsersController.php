<?php

namespace App\Controllers;

use App\Models\Users;

class UsersController{

    public function show($container, $request){

        /**
         * Implentação feita dessa forma, por que a forma que foi feita no video HTTP FOUNDATION foi estava funcionando
         * eu fiz dessa forama para pegar o número que foi passado na URI e passar como parâmetro para buscar o usuário
         */
        $array = explode('/', $request->server->get('REQUEST_URI'));
        $id = $array[(count($array) - 1)]; //Pega a última posição do array, que é a posição que contém o número informado

        $user = new Users($container);
        $data = $user->get($id);
        
        return 'estamos listando o nome de id: ' . $data['name'];
    }
}