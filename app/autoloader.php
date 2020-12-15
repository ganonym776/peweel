<?php

spl_autoload_register(function ($className) {
    $path = '../app/';
    $fullpath = $path . str_replace('\\', '/', $className) . '.php';
    if (!file_exists($fullpath)) {
        throw new Exception("Unable to load $className.");
    }
    require_once $fullpath;
});
