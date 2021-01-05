<?php

namespace Routes;

use Configs\Env;
use Controllers\Admin as Controller;

class Admin extends Controller
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
        if ($_SESSION['r'] === "admin") {
            $data = [
                'title' => 'Dashboard',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
                'totalIklan' => $this->countItem(),
                'totalUser' => $this->countUser(),
                'lokasiUser' => $this->lokasiUser(),
                'kategori' => $this->chartKategori(),
            ];

            $this->view('Admin/Index', $data);
        } else {
            header('location:' . $this->env("urlroot") . '/auth/login');
        }
    }

    public function tabeluser()
    {
        if ($_SESSION['r'] === "admin") {
            $data = [
                'title' => 'Tabel User',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
                // 'totalIklan' => $this->countItem(),
                'User' => $this->getAllUser(),
                // 'lokasiUser' => $this->lokasiUser(),
                // 'kategori' => $this->chartKategori(),
            ];

            $this->view('Admin/TabelUser', $data);
        } else {
            header('location:' . $this->env("urlroot") . '/auth/login');
        }
    }
}
