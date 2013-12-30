<?php

return array(
    'name' => 'EncorePHP',
    'vendor' => 'EncorePHP',

    'providers' => array(
        'Encore\View\ServiceProvider',
        'Encore\Foundation\Provider\Collection',
        'Encore\Foundation\Provider\Application',
        'Encore\Foundation\Provider\Filesystem',
        'Encore\Console\ServiceProvider',
        'Encore\Testing\ServiceProvider'
    ),

    'aliases' => array(
        'App' => 'Encore\Foundation\Facade\App',
        'Filesystem' => 'Encore\Foundation\Facade\Filesystem',
        'View' => 'Encore\View\Facade',
        'Console' => 'Encore\Console\Facade',
    )
);