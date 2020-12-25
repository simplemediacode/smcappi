<?php

namespace SmcAppi;

use SmcAppi\Configs\Config;

class SmcAppi
{
    var $version;
    
    public function __construct()
    {
        $this->version = $this->version();
    }
    public function version()
    {
        return '1.0.0';
    }

    public function getConfig(){
        $configs = new Config();
        return $configs->version;
        
    }
}
