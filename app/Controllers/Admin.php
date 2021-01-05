<?php

namespace Controllers;

use Library\Controller;
use Configs\Env;

class Admin extends Controller
{
    protected $itemModel;
    protected $userModel;

    private function urlroot()
    {
        $e = new Env();
        return $e::$URLROOT;
    }

    public function __construct()
    {
        $this->itemModel = $this->model('Item');
        $this->userModel = $this->model('User');
    }

    public function countItem()
    {
        $result = $this->itemModel->countItem()[0];
        return $result['total'];
    }

    public function countUser()
    {
        $result = $this->userModel->countUser()[0];
        return $result['total'];
    }

    public function lokasiUser()
    {
        $result = $this->userModel->lokasiUser();
        return $result;
    }

    public function getAllUser()
    {
        $result = $this->userModel->getAllUser();
        return $result;
    }

    public function chartKategori()
    {
        $result = $this->itemModel->itemKategori();
        return $result;
    }
}
