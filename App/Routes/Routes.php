<?php

namespace App\Routes;

use App\Controllers\Controller;

class Routes
{
    public static function Routing()
    {
        Route::get('index.php', function () {
            Controller::View("Index");
        });
    }
}
