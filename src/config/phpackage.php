<?php
return [

    'defaultDB' => 'mysqlignite',

    'connections' => [

        'mysqlignite' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'localhost'),
            'database'  => env('DB_IGNITE_DATABASE', 'forge'),
            'username'  => env('DB_IGNITE_USERNAME', 'forge'),
            'password'  => env('DB_IGNITE_PASSWORD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],
];
