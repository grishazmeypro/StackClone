<?php

return [
    'dsn'     => "mysql:host=blu-ray.student.bth.se;dbname=grus13;",
    'username'        => "grus13",
    'password'        => "kFzEC-3x",
    'driver_options'  => [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
    'table_prefix'    => "SC_",
    'verbose' => false,
    //'debug_connect' => 'true',
];
