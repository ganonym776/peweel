<?php

namespace Routes;

use Controllers\Controller;

class Routes
{
    public static function Routing()
    {
        Route::get('index.php', function () {
            Controller::View("Index");
        });
    }
}
