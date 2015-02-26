<?php

return [
    'connections' => [
        'app' => [
            'adapter'    => 'mysql',
            'dsn'        => 'sqlite:'.__DIR__.'/../database/database.sq3',
            'user'       => 'app',
            'password'   => ''
        ]
    ]
];