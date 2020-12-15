<?php

namespace Routes;

use Library\Controller;

class Auth
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password'])
            ];
            echo "username : " . $data['username'] . " password : " . $data['password'];
        } else {
            Controller::view('Auth/Login');
        }
    }

    public function register()
    {
        Controller::view('Auth/Register');
    }
}
