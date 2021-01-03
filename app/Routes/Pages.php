<?php

namespace Routes;

use Configs\Env;
use Library\Controller;

class Pages extends Controller
{
    private function env($request)
    {
        $e = new Env();
        if ($request === "asset") {
            return $e::$URLROOT . "/public";
        } elseif ($request === "urlroot") {
            return $e::$URLROOT;
        } elseif ($request === "vendor") {
            return $e::$URLROOT . "/vendor";
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Bekasan - Pusat jual beli barang bekas',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
            'vendor' => $this->env("vendor"),
        ];

        $this::view('Index', $data);
    }

    public function aboutus()
    {
        $data = [
            'title' => 'About Us',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
            'vendor' => $this->env("vendor"),
        ];

        $this::view('Pages/AboutUs', $data);
    }

    public function help()
    {
        $data = [
            'title' => 'Pusat Bantuan',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
            'vendor' => $this->env("vendor"),
        ];

        $this::view('Help/PusatBantuan', $data);
    }

    public function error()
    {
        $data = [
            'title' => 'Ups.. Not Found!!',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
            'vendor' => $this->env("vendor"),
        ];

        $this::view('Pages/404', $data);
    }
}
