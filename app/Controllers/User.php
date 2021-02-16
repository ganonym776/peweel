<?php

namespace Controllers;

use Library\Controller;
use Configs\Env;

class User extends Controller
{
    protected $userModel;
    protected $allData;

    private function urlroot()
    {
        $e = new Env();
        return $e::$URLROOT;
    }

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function updateFoto($data)
    {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");

        $filename = basename($data['lokasi_foto']["name"]);
        $filetype = $data['lokasi_foto']["type"];
        $filesize = $data['lokasi_foto']["size"];
        // Verify file extension
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if (!array_key_exists($ext, $allowed)) {
            $errors['lokasi_foto'] = "Error: Please select a valid file format.";
        };

        // Verify file size - 5MB maximum
        $maxsize = 2 * 1024 * 1024;
        if ($filesize > $maxsize) {
            $errors['lokasi_foto'] = "Error: File size is larger than the allowed limit.";
        };

        // Verify MYME type of the file
        if (in_array($filetype, $allowed)) {
            // Check whether file exists before uploading it
            $dir = $this->urlroot() . "/public/user/";
            if (file_exists($dir . $data['username'])) {
                move_uploaded_file($data['lokasi_foto']["tmp_name"], $dir . $data['username']);
            } else {
                move_uploaded_file($data['lokasi_foto']["tmp_name"], $dir . $data['username']);
            }
        } else {
            $errors['lokasi_foto'] = "Error: There was a problem uploading your file. Please try again.";
        }

        // jika tidak ada error maka jalankan perintah ini
        if (empty($errors)) {
            $hasil = $this->userModel->updateFoto("../public/user/" . $data['username'] . "/" . $filename, $data['username']);
            // login user
            if ($hasil) {
                // redirect ke login 
                header('location:' . $this->urlroot() . '/user/profile');
            } else {
                $data['error'] = "terjadi kesalahan, mohon coba lagi";
                return $data;
            }
        } else {
            $data['error'] = $errors;
            return $data;
        }
    }
    public function loginValidation($data)
    {
        //membersihkan data dari karakter XSS
        foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value);
        }

        // cek apakah data email valid
        if (empty($data['email'])) {
            $errors["email"] = "email harus diisi";
        }

        // cek apakah data email valid
        if (empty($data['password'])) {
            $errors["password"] = "kata sandi harus diisi";
        }

        // jika tidak ada error maka jalankan perintah ini
        if (empty($errors)) {
            $loggedInUser = $this->userModel->login($data);
            // login user
            if ($loggedInUser) {
                $this->createUserSession($loggedInUser);
                // redirect ke login 
                // header('location:' . $this->urlroot() . '/auth/login');
            } else {
                unset($data['password']);
                $data['error'] = "password atau email tidak valid, mohon coba lagi";
                return $data;
            }
        } else {
            unset($data['password']);
            $data['error'] = $errors;
            return $data;
        }
    }

    public function registerValidation($data)
    {
        //membersihkan data dari karakter XSS
        foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value);
        }

        $nameValidation = "/^[a-zA-Z]*$/";
        $usernameValidation = "/^[a-zA-Z0-9_.-]*$/";
        $passwordValidation1 = "/^[a-zA-Z!@_.\d]{8,}$/";
        $passwordValidation2 = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z!@_.\d]{8,}$/";

        // cek apakah data firstname valid
        if (empty($data['first_name'])) {
            $errors["first_name"] = "nama depan harus diisi";
        } elseif (!preg_match($nameValidation, $data['first_name'])) {
            $errors["first_name"] = "nama depan hanya boleh menggunkan huruf";
        }

        // cek apakah data last_name valid
        if (empty($data['last_name'])) {
            $errors["last_name"] = "nama belakang harus diisi";
        } elseif (!preg_match($nameValidation, $data['last_name'])) {
            $errors["last_name"] = "nama belakang hanya boleh menggunkan huruf";
        }

        // cek apakah data username valid
        if (empty($data['username'])) {
            $errors["username"] = "username harus diisi";
        } elseif (!preg_match($usernameValidation, $data['username'])) {
            $errors["username"] = "username hanya boleh menggunakan angka,huruf,atau simbol(_-.)";
        } else {
            if ($this->userModel->findUserByUsername($data['username'])) {
                $errors["username"] = "Username sudah terpakai";
            }
        }

        // cek apakah data email valid
        if (empty($data['email'])) {
            $errors["email"] = "email harus diisi";
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "tolong masukkan format email yang benar";
        } else {
            if ($this->userModel->findUserByEmail($data['email'])) {
                $errors["email"] = "Email sudah terpakai";
            }
        }

        // cek apakah data password valid
        if (empty($data['password'])) {
            $errors["password"] = "kata sandi harus diisi";
        } elseif (strlen($data['password']) < 8) {
            $errors["password"] = "kata sandi harus minimal berisi 8 karakter";
        } elseif (!preg_match($passwordValidation1, $data['password'])) {
            $errors["password"] = "kata sandi hanya boleh menggunakan angka,huruf,atau simbol(!@_.)";
        } elseif (!preg_match($passwordValidation2, $data['password'])) {
            $errors["password"] = "kata sandi harus terdapat gabungan huruf kapital,huruf kecil, dan angka";
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

        // cek apakah data provinsi valid
        if (empty($data['provinsi'])) {
            $errors["provinsi"] = "Provinsi harus diisi";
        } elseif (!preg_match($nameValidation, $data['provinsi'])) {
            $errors["provinsi"] = "Provinsi hanya boleh menggunkan huruf";
        }

        // cek apakah data kabupaten valid
        if (empty($data['kabupaten'])) {
            $errors["kabupaten"] = "Provinsi harus diisi";
        } elseif (!preg_match($nameValidation, $data['kabupaten'])) {
            $errors["kabupaten"] = "Provinsi hanya boleh menggunkan huruf";
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

            // register user
            if ($this->userModel->register($data)) {
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

    public function getByUsername($username)
    {
        //membersihkan data dari karakter XSS
        $username = htmlspecialchars($username);

        $this->allData = $this->userModel->findUserByUsername($username);
        return $this->allData[0];
    }

    public function createUserSession($user)
    {
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['r'] = $user['role'];
        if ($_SESSION['r'] === "customer") {
            header('location:' . $this->urlroot() . '/item/index');
        } else {
            header('location:' . $this->urlroot() . '/admin/index');
        }
    }

    public function logout()
    {
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['r']);
        header('location:' . $this->urlroot() . '/auth/login');
    }
}
