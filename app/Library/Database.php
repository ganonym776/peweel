<?php

namespace Library;

use Configs\Env;
use mysqli;

class Database extends Env
{
    private $stmt;

    public function connect()
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
        $mysqli = $this->connect();
        $this->stmt = $mysqli->prepare($queryString);
        $this->stmt->execute();
        return $this->resultSet();
        $mysqli->close();
    }

    public function insert($tableName, $data)
    {
        $mysqli = $this->connect();
        $keyValues = $values = "";
        foreach ($data as $key => $value) {
            $keyValues =  $key . ',' . $keyValues;
            $values =  "'" . $value . "'," . $values;
        }
        $keyValues = $keyValues . "created_at";
        $currentDateTime = date('Y-m-d H:i:s');
        $values = $values . "'$currentDateTime'";
        $sql = "INSERT INTO $tableName ($keyValues) VALUES ($values)";
        if ($mysqli->query($sql) === true) {
            return true;
        } else {
            return false;
        }
        // Close connection
        $mysqli->close();
    }

    public function resultSet()
    {
        $result = $this->stmt->get_result();
        $arr = [];
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return $arr;
    }
}
