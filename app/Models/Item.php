<?php

namespace Models;

use Library\Database;

class Item extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllItem()
    {
        $result = $this->db->select('SELECT * FROM item');
        return $result;
    }

    public function findItemByName($name)
    {
        $result = $this->db->select("SELECT * FROM item WHERE nama_item='" . $name . "'");
        return $result;
    }

    public function findItemByKategori($nama)
    {
        $result = $this->db->select("SELECT * FROM item WHERE id_item in (SELECT id_item from item_kategori where id_kategori in (SELECT id_kategori FROM kategori where nama_kategori = '" . $nama . "'))");
        return $result;
    }

    public function findItemByProvinsi($provinsi)
    {
        $result = $this->db->select("SELECT * FROM item WHERE id_item in (SELECT id_item from user where provinsi = " . $provinsi . ")");
        return $result;
    }
}
