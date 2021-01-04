<?php

namespace Library;

class Controller
{
    // membuat object model dan mengembalikannya
    public function model($model)
    {
        $model = '\\Models\\' . $model;
        return new $model;
    }

    // load views (cek file view)
    public function view($viewName, $data = [])
    {
        if (file_exists('../views/' . $viewName . '.php')) {
            require_once '../views/' . $viewName . '.php';
        } else {
            die("Maaf Halaman Yang anda Cari tidak ada");
        }
    }
}
