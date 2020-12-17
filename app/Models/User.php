<?php

namespace Models;

use Library\Database;

class User extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $result = $this->db->select('SELECT * FROM user');
        return $result;
    }

    public function register($data)
    {
        $result = $this->db->insert('user', $data);
        return $result;
    }
}
