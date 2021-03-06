<?php

namespace Routes;

use Configs\Env;
use Controllers\Item as ControllerItem;
use Controllers\Kategori as ControllerKategori;

class Item extends ControllerItem
{
    protected $KategoriController;
    protected $ItemController;

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
                'banner' => $this->ItemController->getAllBanner(),
                'kategori' => $this->KategoriController->getAll(),
                'item' => $this->ItemController->getAll()
            ];
        } else {
            if (((int) $params > 0)) {
                $data = [
                    'title' => 'Bekasan - Pusat jual beli barang bekas',
                    'URLROOT' => $this->env("urlroot"),
                    'asset' => $this->env("asset"),
                    'index' => true,
                    'banner' => $this->ItemController->getAllBanner(),
                    'kategori' => $this->KategoriController->getAll(),
                    'item' => $this->ItemController->nextPage($params)
                ];
            } else {
                $data = [
                    'title' => 'Bekasan - Pusat jual beli barang bekas',
                    'URLROOT' => $this->env("urlroot"),
                    'asset' => $this->env("asset"),
                    'index' => true,
                    'banner' => $this->ItemController->getAllBanner(),
                    'kategori' => $this->KategoriController->getAll(),
                    'item' => $this->ItemController->getByKategori($params)
                ];
            }
        }

        $this->view('Item/List', $data);
    }

    public function list($params = null)
    {
        if (!isset($params)) {
            $data = [
                'title' => 'Bekasan - Pusat jual beli barang bekas',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
                'index' => false,
                'kategori' => $this->KategoriController->getAll(),
                'item' => $this->ItemController->getAll()
            ];
        } else {
            if (is_string((int) $params) && ((int) $params > 0)) {
                $data = [
                    'title' => 'Bekasan - Pusat jual beli barang bekas',
                    'URLROOT' => $this->env("urlroot"),
                    'asset' => $this->env("asset"),
                    'index' => false,
                    'kategori' => $this->KategoriController->getAll(),
                    'item' => $this->ItemController->nextPage($params)
                ];
            } else {
                $data = [
                    'title' => 'Bekasan - Pusat jual beli barang bekas',
                    'URLROOT' => $this->env("urlroot"),
                    'asset' => $this->env("asset"),
                    'index' => false,
                    'kategori' => $this->KategoriController->getAll(),
                    'item' => $this->ItemController->getByKategori($params)
                ];
            }
        }

        $this->view('Item/List', $data);
    }

    public function detail($id_item)
    {
        if ($_SESSION['r']) {
            $data = [
                'title' => 'Bekasan - Pusat jual beli barang bekas',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
                // 'totalIklan' => $this->countItem(),
                // 'totalUser' => $this->countUser(),
                // 'lokasiUser' => $this->lokasiUser(),
                // 'kategori' => $this->chartKategori(),
            ];

            $this->view('Item/Detail', $data);
        } else {
            header('location:' . $this->env("urlroot") . '/auth/login');
        }
    }
}
