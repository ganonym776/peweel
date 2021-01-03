<?php

namespace Models;

use Library\Database;

class kategori extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKategori()
    {
        $result = $this->db->select('SELECT * FROM kategori');
        return $result;
    }

    public function findKategoriByName($name)
    {
        $result = $this->db->select("SELECT * FROM kategori WHERE nama_kategori='" . $name . "'");
        return $result;
    }
}
