<?php

namespace Traits;

trait Loggable
{
    public function log($message)
    {
        echo date('[Y-m-d H:i:s]') . " {$message}\n";
    }
}
