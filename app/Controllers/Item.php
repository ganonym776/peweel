<?php

namespace Controllers;

use Library\Controller;
use Configs\Env;

class Item extends Controller
{
    protected $itemModel;
    protected $allData;
    protected $current;

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
        $this->current = 0;
        $this->allData[$this->current]['total'] = sizeof($this->allData);
        $this->allData[$this->current]['current'] = $this->current;
        return $this->allData[$this->current];
    }

    public function nextPage($num)
    {
        if (sizeof($this->allData) > $num) {
            $this->current = $num;
        }
        return $this->allData[$this->current];
    }

    public function backPage($num)
    {
        if ($num > 0) {
            $this->current = $num;
        }
        return $this->allData[$this->current];
    }

    public function itemValidation($data)
    {
        //membersihkan data dari karakter XSS
        foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value);
        }

        $itemnameValidation = "/^[a-zA-Z0-9.-]*$/";

        // cek apakah data itemname valid
        if (empty($data['itemname'])) {
            $errors["itemname"] = "itemname harus diisi";
        } elseif (!preg_match($itemnameValidation, $data['itemname'])) {
            $errors["itemname"] = "itemname hanya boleh menggunakan angka,huruf,atau simbol(_-.)";
        } else {
            if ($this->itemModel->findUserByUsername($data['itemname'])) {
                $errors["itemname"] = "Username sudah terpakai";
            }
        }

        // cek apakah data email valid
        if (empty($data['email'])) {
            $errors["email"] = "email harus diisi";
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "tolong masukkan format email yang benar";
        } else {
            if ($this->itemModel->findUserByEmail($data['email'])) {
                $errors["email"] = "Email sudah terpakai";
            }
        }

        // cek apakah data re_password valid
        if (empty($data['re_password'])) {
            $errors["re_password"] = "konfirmasi kata sandi harus diisi";
        } else {
            if ($data['password'] != $data['re_password']) {
                $errors["re_password"] = "konfirmasi kata sandi tidak sama dengan kata sandi anda";
            }
        }

        // cek apakah data phone_num valid
        if (isset($data['phone_num'])) {
            if (strlen($data['phone_num']) < 10 || strlen($data['phone_num']) > 15) {
                $errors["phone_num"] = "panjang nomor telpon tidak valid";
            }
        }

        // cek apakah data address valid
        if (isset($data['address'])) {
            if (!preg_match('/^[a-zA-Z0-9 .]*$/', $data['address'])) {
                $errors["address"] = "alamat hanya boleh menggunakan angka,huruf atau simbol (.)";
            }
        }

        // jika tidak ada error maka jalankan perintah ini
        if (empty($errors)) {
            // hash password
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            unset($data['re_password']);

            // register item
            if ($this->itemModel->register($data)) {
                // redirect ke login 
                header('location:' . $this->urlroot() . '/auth/login');
            } else {
                die('Something went wrong');
            }
        } else {
            unset($data['password']);
            unset($data['re_password']);
            $data['error'] = $errors;
            return $data;
        }
    }

    public function createUserSession($item)
    {
        $_SESSION['itemname'] = $item['itemname'];
        $_SESSION['email'] = $item['email'];
        $_SESSION['r'] = $item['role'];
        if ($_SESSION['r'] === "customer") {
            header('location:' . $this->urlroot() . '/item/dashboard');
        } else {
            header('location:' . $this->urlroot() . '/admin/dashboard');
        }
    }

    public function logout()
    {
        unset($_SESSION['itemname']);
        unset($_SESSION['email']);
        unset($_SESSION['r']);
        header('location:' . $this->urlroot() . '/auth/login');
    }
}
