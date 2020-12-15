<?php

namespace Routes;

use Library\Controller;
use Library\Core;
use Models\Model;

class Pages extends Controller
{
    public function __construct()
    {
        // $this->userModel = $this->model('User');
    }
    public function index()
    {
        // $users = $this->userModel->getAllUser();

        $data = [
            'title' => 'Home page',
            // 'users' => $users
        ];

        $this::view('Index', $data);
    }

    // public static function Routing()
    // {
    //     // Landing Page
    //     // Core::get('', function () {
    //     //     Controller::View("Index");
    //     // });

    //     // //Auth 
    //     // Core::get('login', function () {
    //     //     Controller::View("Auth/Login");
    //     // });
    //     // Core::get('register', function () {
    //     //     Controller::View("Auth/Register");
    //     // });

    //     // // Admin
    //     // Core::get('admin', function () {
    //     //     Admin::View("Admin/Dashboard");
    //     // });
    //     // Core::get('admin/:test', function () {
    //     //     Admin::Test("Admin/test");
    //     // });

    //     // // Customer
    //     // Core::get('u', function () {
    //     //     Customer::View("Customer/Dashboard");
    //     // });
    //     // Core::get('u/:test/:tes', function () {
    //     //     Customer::View("Customer/test");
    //     // });
    // }
}
