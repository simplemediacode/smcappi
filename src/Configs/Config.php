<?php

namespace SmcAppi\Configs;

class Config{

    var $version = '1.0.0';
    
    public function loadFile($file){

        try {
            require_once $file;
        } catch (\Throwable $th) {
            throw $th;
        }


        
    }
}