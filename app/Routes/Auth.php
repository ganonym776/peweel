<?php

namespace Routes;

use Configs\Env;
use Controllers\User;
use Library\Controller;
use Library\Database;

class Auth
{
    protected $userController;
    public function __construct()
    {
        $this->userController = new User();
    }
    private function asset()
    {
        $e = new Env();
        return $e::$URLROOT . "/public";
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // $data = [
            //     'username' => trim($_POST['username']),
            //     'password' => trim($_POST['password'])
            // ];
            $data = [
                'username' => 'dwi',
                'password' => 'dwi',
                'email' => 'dwi@gmail.com',
                'fullname' => 'dwiiiii',
            ];
            $d = new Database();
            $d->insert('user', $data);
        } else {
            Controller::view('Auth/Login');
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                're_password' => trim($_POST['re_password']),
            ];
            $result = $this->userController->registerValidation($data);
        } else {
            $data = [
                'title' => 'Registrasi',
                'asset' => $this->asset(),
            ];
            Controller::view('Auth/Register', $data);
        }
    }
}
