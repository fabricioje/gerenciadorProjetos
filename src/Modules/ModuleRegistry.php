<?php

namespace SON\Framework\Modules;

use SON\Framework\App;

class ModuleRegistry{

    private $app;
    private $composer;
    private $modules = [];

    public function setApp(App $app){
        $this->app = $app;
    }

    public function setComposer($composer){

        $this->composer = $composer;
    }
}