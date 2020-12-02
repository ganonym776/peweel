<?php
require_once './Routes.php';

function __autoload($class_name)
{
    require_once('./routes/' . $class_name . '.php');
};
