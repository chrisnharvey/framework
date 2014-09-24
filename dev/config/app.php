<?php

return [
    'providers' => [
        // Application service providers
        'Dev\Provider\App',

        // Core service providers
        'Encore\Console\ServiceProvider',
        'Encore\Development\ServiceProvider',
        'Encore\REPL\ServiceProvider',
        'Encore\Compiler\ServiceProvider',
        'Encore\Testing\ServiceProvider',
    ],

    'aliases' => [
        'Console' => 'Encore\Console\Proxy'
    ]
];
