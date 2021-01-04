<?php

namespace Routes;

use Configs\Env;
use Controllers\User as Controller;

class Auth extends Controller
{
    protected $userController;
    public function __construct()
    {
        $this->userController = new Controller();
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

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password'])
            ];
            $result = $this->userController->loginValidation($data);
            if ($result) {
                foreach ($result as $key => $value) {
                    if (!is_array($result[$key])) {
                        $result[$key] = htmlspecialchars($value);
                    } else {
                        foreach ($value as $kunci => $isi) {
                            $value[$kunci] = htmlspecialchars($isi);
                        }
                    }
                }
                $init = [
                    'title' => 'Login',
                    'URLROOT' => $this->env("urlroot"),
                    'asset' => $this->env("asset"),
                ];
                $data = array_merge($result, $init);
                $this->view('Auth/Login', $data);
            }
        } else {
            $data = [
                'title' => 'Login',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
                'email' => ""
            ];
            $this->view('Auth/Login', $data);
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'phone_num' => trim($_POST['phone_num']),
                'provinsi' => trim($_POST['provinsi']),
                'kabupaten' => trim($_POST['kabupaten']),
                'address' => trim($_POST['address']),
                'password' => trim($_POST['password']),
                're_password' => trim($_POST['re_password'])
            ];
            $result = $this->userController->registerValidation($data);
            if (isset($result)) {
                foreach ($result as $key => $value) {
                    if (!is_array($result[$key])) {
                        $result[$key] = htmlspecialchars($value);
                    } else {
                        foreach ($value as $kunci => $isi) {
                            $value[$kunci] = htmlspecialchars($isi);
                        }
                    }
                }
                $init = [
                    'title' => 'Registrasi',
                    'URLROOT' => $this->env("urlroot"),
                    'asset' => $this->env("asset"),
                ];
                $data = array_merge($result, $init);
                $this->view('Auth/Register', $data);
            }
        } else {
            $data = [
                'title' => 'Registrasi',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
                'username' => '',
                'email' => '',
                'first_name' => '',
                'provinsi' => '',
                'kabupaten' => '',
                'last_name' => '',
                'phone_num' => '',
                'address' => ''
            ];
            $this->view('Auth/Register', $data);
        }
    }
}
