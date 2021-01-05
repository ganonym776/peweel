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

    public function countItem()
    {
        $result = $this->db->select('SELECT COUNT(id_item) as total FROM item');
        return $result;
    }

    public function itemKategori()
    {
        $result = $this->db->select('SELECT COUNT(item_kategori.id_item)as totalItem,kategori.nama_kategori FROM item_kategori RIGHT JOIN kategori ON item_kategori.id_kategori = kategori.id_kategori GROUP BY kategori.nama_kategori');
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
