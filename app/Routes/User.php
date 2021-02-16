<?php

namespace Routes;

use Configs\Env;
use Controllers\User as ControllerUser;

class User extends ControllerUser
{
    protected $UserController;

    public function __construct()
    {
        $this->UserController = new ControllerUser();
    }

    private function env($request)
    {
        $e = new Env();
        if ($request === "asset") {
            return $e::$URLROOT . "/public";
        } elseif ($request === "urlroot") {
            return $e::$URLROOT;
        }
    }

    public function dashboard()
    {
        if ($_SESSION['r']) {
            $data = [
                'title' => 'Dashboard',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
            ];

            $this->view('User/Dashboard', $data);
        } else {
            header('location:' . $this->env("urlroot") . '/auth/login');
        }
    }

    public function profil()
    {
        if ($_SESSION['r']) {

            $data = [
                'title' => 'Profil',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
                'user' => $this->UserController->getByUsername($_SESSION['username']),
            ];
            $this->view('User/Profil', $data);
        } else {
            header('location:' . $this->env("urlroot") . '/auth/login');
        }
    }

    public function iklan()
    {
        if ($_SESSION['r']) {

            $data = [
                'title' => 'Bekasan - Pusat jual beli barang bekas',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
            ];

            $this->view('Pages/PasangIklan', $data);
        } else {
            header('location:' . $this->env("urlroot") . '/auth/login');
        }
    }

    public function updatef($username)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // Check if file was uploaded without errors
            if (isset($_FILES["lokasi_foto"]) && $_FILES["lokasi_foto"]["error"] == 0) {
                $data = [
                    'lokasi_foto' => $_FILES["lokasi_foto"],
                    'username' => $username,
                ];
                $result = $this->UserController->updateFoto($data);
                var_dump($result);
                // if ($result) {
                //     foreach ($result as $key => $value) {
                //         if (!is_array($result[$key])) {
                //             $result[$key] = htmlspecialchars($value);
                //         } else {
                //             foreach ($value as $kunci => $isi) {
                //                 $value[$kunci] = htmlspecialchars($isi);
                //             }
                //         }
                //     }
                //     $init = [
                //         'title' => 'Profil',
                //         'URLROOT' => $this->env("urlroot"),
                //         'asset' => $this->env("asset"),
                //         'user' => $this->UserController->getByUsername($_SESSION['username']),
                //     ];
                //     $data = array_merge($result, $init);
                //     $this->view('User/Profil', $data);
                // }
            } else {
                header('location:' . $this->env("urlroot") . '/user/profil');
            }
        } else {
            header('location:' . $this->env("urlroot") . '/user/profil');
        }
    }

    public function signOut()
    {
        $this->logout();
    }
}
