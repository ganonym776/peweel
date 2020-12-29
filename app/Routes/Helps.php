<?php

namespace Routes;

use Configs\Env;
use Library\Controller;
use Library\Core;
use Models\Model;

class Helps extends Controller
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
            'title' => 'Pusat Bantuan ',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
        ];

        $this::view('Help/PusatBantuan', $data);
    }

    public function iklan()
    {
        $data = [
            'title' => 'Pusat Bantuan | Pasang Iklan',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
        ];

        $this::view('Help/PasangIklan', $data);
    }
}
