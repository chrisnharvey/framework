<?php

return [
    'name' => 'EncorePHP',
    'vendor' => 'EncorePHP',

    'providers' => [
        'Encore\Events\ServiceProvider',
        'Encore\Resource\ServiceProvider',
        'Encore\View\ServiceProvider',
        'Encore\Controller\ServiceProvider',
        'Encore\Filesystem\ServiceProvider',
        'Encore\View\ServiceProvider',
        'Encore\GIML\ServiceProvider',
        'Encore\Wx\ServiceProvider'
    ],

    'aliases' => [
        'App' => 'Encore\Kernel\Proxy\App',
        'View' => 'Encore\View\Proxy',
        'Config' => 'Encore\Config\Proxy',
        'Filesystem' => 'Encore\Filesystem\Proxy',
    ]
];