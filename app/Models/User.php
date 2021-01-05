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

    public function countUser()
    {
        $result = $this->db->select('SELECT count(id) as total FROM user');
        return $result;
    }

    public function lokasiUser()
    {
        $result = $this->db->select('SELECT provinsi,kabupaten,COUNT(*) as total FROM `user` GROUP BY provinsi,kabupaten');
        return $result;
    }

    public function findUserByEmail($email)
    {
        $result = $this->db->select("SELECT * FROM user WHERE email='" . $email . "'");
        return $result;
    }

    public function findUserByUsername($username)
    {
        $result = $this->db->select("SELECT * FROM user WHERE username='" . $username . "'");
        return $result;
    }

    public function register($data)
    {
        $result = $this->db->insert('user', $data);
        return $result;
    }

    public function login($data)
    {
        $user = $this->findUserByEmail($data['email']);
        if (!empty($user)) {
            $hashedPassword = $user[0]['password'];
            if (password_verify($data['password'], $hashedPassword)) {
                return $user[0];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
