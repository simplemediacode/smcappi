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
    }
    public function version()
    {
        return '1.0.0';
    }
}
