<?php
require_once "../configs/autoload.php";

/* mencoba konek ke server MySQL. Dengan asumsi Anda menjalankan MySQL server */
$mysqli = new mysqli(env("DB_HOST"), env("DB_USERNAME"), env("DB_PASSWORD"), env("DB_NAME"));

// Cek koneksi
if ($mysqli === false) {
    die("ERROR: Tidak Bisa terkoneksi. " . $mysqli->connect_error);
}
