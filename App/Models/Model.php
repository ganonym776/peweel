<?php

namespace App\Models;

use App\Database\Database;

class Model
{
    public static function getAll($tableName)
    {
        $dbcon = new Database;
        $arr = [];
        $mysqli = $dbcon->connect();
        $tableName = $mysqli->real_escape_string($tableName);
        $stmt = $mysqli->prepare("SELECT * FROM $tableName");
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        if (!$arr) exit('No rows');
        return $arr;
        $stmt->close();
    }
}
