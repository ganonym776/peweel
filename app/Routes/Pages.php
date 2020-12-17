<?php

namespace Routes;

use Configs\Env;
use Library\Controller;
use Library\Core;
use Models\Model;

class Pages extends Controller
{
    private function asset()
    {
        $e = new Env();
        return $e::$URLROOT . "/public";
    }

    public function __construct()
    {
        // $this->userModel = $this->model('User');
    }
    public function index()
    {
        // $users = $this->userModel->getAllUser();
        $data = [
            'title' => 'Home page',
            'asset' => $this->asset(),
            // 'users' => $users
        ];

        $this::view('Index', $data);
    }
}
