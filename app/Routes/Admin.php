<?php

namespace Routes;

use Configs\Env;
use Library\Controller;

class Admin extends Controller
{
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
        if ($_SESSION['r'] === "admin") {
            $data = [
                'title' => 'Dashboard',
                'URLROOT' => $this->env("urlroot"),
                'asset' => $this->env("asset"),
            ];

            $this->view('Admin/Dashboard', $data);
        } else {
            header('location:' . $this->env("urlroot") . '/auth/login');
        }
    }
}
