<?php

return [
    'name' => 'EncorePHP',
    'vendor' => 'EncorePHP',

    'providers' => [
        'Encore\Events\ServiceProvider',
        'Encore\View\ServiceProvider',
        'Encore\Controller\ServiceProvider',
        'Encore\Kernel\Provider\Collection',
        'Encore\Kernel\Provider\Application',
        'Encore\Filesystem\ServiceProvider',
        'Encore\Wx\ServiceProvider'
    ],

    'aliases' => [
        'App' => 'Encore\Kernel\Proxy\App',
        'View' => 'Encore\View\Proxy',
        'Filesystem' => 'Encore\Filesystem\Proxy',
    ]
];