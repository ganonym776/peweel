<?php

use Routes\Route;

$route = new Route;

$route->get('index.php', function () {
    Controllers\Controller::View("Index");
});
