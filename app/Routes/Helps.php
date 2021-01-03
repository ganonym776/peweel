<?php

namespace Routes;

use Configs\Env;
use Library\Controller;
use Library\Core;

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

    public function penipu()
    {
        $data = [
            'title' => 'Pusat Bantuan | Penipuan',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
        ];

        $this::view('Help/Penipuan', $data);
    }

    public function chat()
    {
        $data = [
            'title' => 'Pusat Bantuan | Chat',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
        ];

        $this::view('Help/Chat', $data);
    }

    public function cari()
    {
        $data = [
            'title' => 'Pusat Bantuan | Cari Barang',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
        ];

        $this::view('Help/CariBarang', $data);
    }
}
