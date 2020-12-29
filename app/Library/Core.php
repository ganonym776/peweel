<?php

namespace Library;

use Exception;

class Core
{
    // ::: deklarasi variable dan isi defaultnya ::: //
    // mendefinisikan lokasi file Route
    protected $currentRoute = '\\Routes\\Pages';

    // mendefinisikan method atau fungsi pada file Route
    protected $currentMethod = 'error';

    // berfungsi untuk menyimpan parameter yang ada di url 
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        if (!isset($url)) {
            $this->currentMethod = "index";
        }

        // Mencari file Routes dan ucword akan mengubah namanya menjadi Kapital
        if (isset($url[0])) {
            if (file_exists('../app/Routes/' . ucwords($url[0]) . '.php')) {
                $this->currentRoute = '\\Routes\\' . ucwords($url[0]);
                unset($url[0]);
            }
        }

        // membuat object Route
        $this->currentRoute = new $this->currentRoute();

        // mengecek apakah url memiliki method yang disertakan lalu disimpan pada variable currentMethod
        if (isset($url[1])) {
            if (method_exists($this->currentRoute, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        // mengecek apakah url memiliki parameter lalu disimpan pada variable params
        $this->params = $url ? array_values($url) : [];

        // berfungsi untuk membuat satuan array menjadi paramater/argumen dari sebuah function.
        error_reporting(E_ERROR | E_PARSE);

        if (!call_user_func_array([$this->currentRoute, $this->currentMethod], $this->params)) {
            $this->currentRoute = '\\Routes\\' . ucwords("Pages");
            // membuat object Route
            $this->currentRoute = new $this->currentRoute();
            call_user_func_array([$this->currentRoute, $this->currentMethod], $this->params);
        }
    }

    // mengambil url dan mengelolanya 
    public function getUrl()
    {
        if (isset($_GET['url'])) {

            // menghilangkan tanda '/' pada akhir url
            $url = rtrim($_GET['url'], '/');

            // memfilter angka/huruf pada variable 
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // memecah kata pada string url ke bentuk array
            $url = explode('/', $url);

            return $url;
        }
    }
};
