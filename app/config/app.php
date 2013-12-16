<?php

return array(
    'name' => 'EncorePHP',
    'vendor' => 'EncorePHP',

    'providers' => array(
        'Encore\View\ServiceProvider',
        'Encore\Console\ServiceProvider'
    ),

    'aliases' => array(
        'App' => 'Encore\Foundation\Facade\App',
        'View' => 'Encore\View\Facade',
        'Console' => 'Encore\Console\Facade',
    )
);