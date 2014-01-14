<?php

return [
    'name' => 'EncorePHP',
    'vendor' => 'EncorePHP',

    'providers' => [
        'Encore\View\ServiceProvider',
        'Encore\Foundation\Provider\Collection',
        'Encore\Foundation\Provider\Application',
        'Encore\Foundation\Provider\Filesystem'
    ],

    'aliases' => [
        'App' => 'Encore\Foundation\Facade\App',
        'Filesystem' => 'Encore\Foundation\Facade\Filesystem',
        'View' => 'Encore\View\Facade'
    ]
];