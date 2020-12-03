<?php

namespace Database;

use Configs\Env;

class Database extends Env
{
    public static function connect()
    {
        // /* mencoba konek ke server MySQL. Dengan asumsi Anda menjalankan MySQL server */
        $mysqli = new \mysqli(self::$DB_HOST, self::$DB_USERNAME, self::$DB_PASSWORD, self::$DB_NAME, self::$DB_PORT);

        // Cek koneksi
        if ($mysqli === false) {
            die("ERROR: Tidak Bisa terkoneksi. " . $mysqli->connect_error);
        }
        return $mysqli;
    }
}
