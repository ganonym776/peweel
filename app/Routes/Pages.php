<?php

namespace Routes;

use Configs\Env;
use Controllers\Item as Controller;
use Controllers\Kategori;

class Pages extends Controller
{
    protected $ItemController;
    protected $KategoriController;

    public function __construct()
    {
        $this->ItemController = new Controller();
        $this->KategoriController = new Kategori();
    }

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
            'title' => 'Bekasan - Pusat jual beli barang bekas',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
            'item' => $this->ItemController->getAll(),
            'banner' => $this->ItemController->getAllBanner(),
            'kategori' => $this->KategoriController->getAll(),
            'index' => true,
        ];

        $this->view('Index', $data);
    }

    public function aboutus()
    {
        $data = [
            'title' => 'About Us',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
        ];

        $this->view('Pages/AboutUs', $data);
    }

    public function help()
    {
        $data = [
            'title' => 'Pusat Bantuan',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
        ];

        $this->view('Help/PusatBantuan', $data);
    }

    public function error()
    {
        $data = [
            'title' => 'Ups.. Not Found!!',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
        ];

        $this->view('Pages/404', $data);
    }
}
