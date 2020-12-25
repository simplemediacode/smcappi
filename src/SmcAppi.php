<?php

namespace SmcAppi;

use SmcAppi\Configs\Config;

class SmcAppi
{
    var $version;
    var $configs;

    public function __construct()
    {
        $this->version = $this->version();
        $this->configs = $this->loadConfigs();
    }
    public function version()
    {
        return '1.0.0';
    }

    public function getConfig()
    {
        $configs = new Config();
        return $configs->version;
    }
    
    public function loadConfigs()
    {
        $config = new Config();
        return $config->version;
    }
}
