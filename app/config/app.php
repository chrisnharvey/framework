<?php

return [
    'name' => 'EncorePHP',
    'vendor' => 'EncorePHP',

    'providers' => [
        'Encore\View\ServiceProvider',
        'Encore\Kernel\Provider\Collection',
        'Encore\Kernel\Provider\Application',
    ],

    'aliases' => [
        'App' => 'Encore\Kernel\Proxy\App',
        'View' => 'Encore\View\Proxy',
    ]
];