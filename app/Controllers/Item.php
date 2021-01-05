<?php

namespace Controllers;

use Library\Controller;
use Configs\Env;

class Item extends Controller
{
    protected $itemModel;
    protected $allData;
    protected $current = 1;

    private function urlroot()
    {
        $e = new Env();
        return $e::$URLROOT;
    }

    public function __construct()
    {
        $this->itemModel = $this->model('Item');
    }

    public function getAll()
    {
        $this->allData = array_chunk($this->itemModel->getAllItem(), 9);
        $this->allData[$this->current - 1]['total'] = sizeof($this->allData);
        $this->allData[$this->current - 1]['current'] = $this->current;
        return $this->allData[$this->current - 1];
    }

    public function getByKategori($kategori)
    {
        $this->allData = array_chunk($this->itemModel->findItemByKategori($kategori), 9);
        $this->allData[$this->current - 1]['total'] = sizeof($this->allData);
        $this->allData[$this->current - 1]['current'] = $this->current;
        return $this->allData[$this->current - 1];
    }

    public function nextPage($num)
    {
        $this->getAll();
        if (sizeof($this->allData) >= $num) {
            $tmp = sizeof($this->allData);
            $this->current = $num - 1;
            $this->allData[$this->current] = $this->allData[$this->current];
            $this->allData[$this->current]['total'] = $tmp;
            $this->allData[$this->current]['current'] = $this->current + 1;
        }
        return $this->allData[$this->current];
    }
}
