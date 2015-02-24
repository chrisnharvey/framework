<?php

return [
    'connections' => [
        'app' => [
            'adapter'    => 'mysql',
            'dsn'        => 'mysql:host=localhost;dbname=app',
            'user'       => 'app',
            'password'   => '',
            'attributes' => []
        ]
    ],
    'runtime' => [
        'defaultConnection' => 'app',
        'connections' => ['app']
    ],
    'generator' => [
        'defaultConnection' => 'app',
        'connections' => ['app']
    ]
];