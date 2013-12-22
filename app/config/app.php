<?php

return array(
    'name' => 'EncorePHP',
    'vendor' => 'EncorePHP',

    'providers' => array(
        'Encore\View\ServiceProvider',
        'Encore\Foundation\Provider\Collection',
        'Encore\Foundation\Provider\Application',
        'Encore\Console\ServiceProvider',
        'Encore\Testing\ServiceProvider'
    ),

    'aliases' => array(
        'App' => 'Encore\Foundation\Facade\App',
        'View' => 'Encore\View\Facade',
        'Console' => 'Encore\Console\Facade',
    )
);