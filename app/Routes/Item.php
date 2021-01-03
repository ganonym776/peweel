<?php

namespace Routes;

use Configs\Env;
use Controllers\Item as ControllerItem;
use Controllers\Kategori as ControllerKategori;

class Item extends ControllerItem
{
    protected $ItemController;
    protected $KategoriController;
    public function __construct()
    {
        $this->ItemController = new ControllerItem();
        $this->KategoriController = new ControllerKategori();
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

    public function index($params = null)
    {
        if (!isset($params)) {
            $data = [
                'title' => 'Bekasan - Pusat jual beli barang bekas',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
                'index' => true,
                'kategori' => $this->KategoriController->getAll(),
                'item' => $this->ItemController->getAll()
            ];
        } else {
            $data = [
                'title' => 'Bekasan - Pusat jual beli barang bekas',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
                'index' => true,
                'kategori' => $this->KategoriController->getAll(),
                'item' => $this->ItemController->nextPage($params)
            ];
        }

        $this::view('Pages/List', $data);
    }

    public function list()
    {
        $data = [
            'title' => 'Bekasan - Pusat jual beli barang bekas',
            'URLROOT' => $this->env("urlroot"),
            'asset' => $this->env("asset"),
        ];

        $this::view('Pages/List', $data);
    }
}
