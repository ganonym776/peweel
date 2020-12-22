<?php

namespace Routes;

use Configs\Env;
use Library\Controller;
use Library\Core;
use Models\Model;

class User extends Controller
{
    private function env($request)
    {
        $e = new Env();
        if ($request === "asset") {
            return $e::$URLROOT . "/public";
        } elseif ($request === "urlroot") {
            return $e::$URLROOT;
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Dasboard',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
        ];

        $this::view('User/Dashboard', $data);
    }
}
