<?php

return array(
    'name' => 'EncorePHP',
    'vendor' => 'EncorePHP',

    'providers' => array(
        'Encore\View\ServiceProvider'
    ),

    'aliases' => array(
        'App' => 'Encore\Foundation\Facade\App',
        'View' => 'Encore\Foundation\Facade\View'
    )
);