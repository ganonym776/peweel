<?php

function AutoLoader($className)
{
    $path = 'App/';
    $fullpath = $path . $className . '.php';

    if (!file_exists($fullpath)) {
        return false;
    }

    include_once $fullpath;
}

spl_autoload_register('AutoLoader');
