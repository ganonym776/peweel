<?php

namespace Library;

use Configs\Env;
use mysqli;

class Database extends Env
{
    private $stmt;

    public static function connect()
    {
        // /* mencoba konek ke server MySQL. Dengan asumsi Anda menjalankan MySQL server */
        $mysqli = new mysqli(self::$DB_HOST, self::$DB_USERNAME, self::$DB_PASSWORD, self::$DB_NAME, self::$DB_PORT);

        // Cek koneksi
        if ($mysqli === false) {
            die("ERROR: Tidak Bisa terkoneksi. " . $mysqli->connect_error);
        }
        return $mysqli;
    }

    public function select($queryString)
    {
        $mysqli = $this::connect();
        $this->stmt = $mysqli->prepare($queryString);
        return $this->resultSet();
    }

    public function insert()
    {
    }

    public function bind($params, $value)
    {
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        $result = $this->stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        if (!$arr) exit('No rows');
        return $arr;
    }
}
