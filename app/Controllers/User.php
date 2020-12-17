<?php

namespace Controllers;

use Library\Controller;

class User extends Controller
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function registerValidation($data)
    {
        //membersihkan data dari karakter XSS
        foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value);
        }

        // cek apakah data kosong
        if (!isset($data['first_name'])) {
            return ["404", "nama depan harus diisi"];
        }
        if (!isset($data['last_name'])) {
            return ["404", "nama belakang harus diisi"];
        }
        if (!isset($data['email'])) {
            return ["404", "email harus diisi"];
        }
        if (!isset($data['password'])) {
            return ["404", "kata sandi harus diisi"];
        }
        if (!isset($data['re_password'])) {
            return ["404", "konfirmasi kata sandi harus diisi"];
        }

        //apakah data hanya menggunakan huruf

        //apakah data email valid

        //apakah password hanya menggunakan angka,huruf,atau simbol(!@_.)
    }
}
