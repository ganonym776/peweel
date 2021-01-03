<?php

namespace Controllers;

use Library\Controller;
use Configs\Env;

class Kategori extends Controller
{
    protected $KategoriModel;

    private function urlroot()
    {
        $e = new Env();
        return $e::$URLROOT;
    }

    public function __construct()
    {
        $this->KategoriModel = $this->model('Kategori');
    }

    public function getAll()
    {
        return $this->KategoriModel->getAllKategori();
    }
}
