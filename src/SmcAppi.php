<?php

namespace SmcAppi;

class SmcAppi
{
    var $version;

    public function __construct()
    {
        $this->version = $this->version();
    }
    public function version()
    {
        return '0.1.0';
    }
    public function thhashit($text)
    {
        return hash('gost', $text);
    }
}
