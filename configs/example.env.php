<?php
$variables = [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => '',
    'DB_PASSWORD' => '',
    'DB_NAME' => '',
    'DB_PORT' => '3306',
];

foreach ($variables as $key => $value) {
    putenv("$key=$value");
}
