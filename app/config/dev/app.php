<?php

return array(
    'providers' => array(
        'Encore\Console\ServiceProvider',
        'Encore\Compiler\ServiceProvider',
        'Encore\Testing\ServiceProvider',
    ),

    'aliases' => array(
        'Console' => 'Encore\Console\Facade'
    )
);