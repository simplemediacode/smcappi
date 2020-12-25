<?php

namespace SmcAppi\Configs;

use SmcAppi\Interfaces\ThrowableInterface;

class Config
{

    var $version = '1.0.0';

    public function loadFile($file)
    {

        try {
            require_once $file;
        } catch (ThrowableInterface $th) {
            throw $th;
        }
    }
}
