<?php

namespace App\Provider;

class Console extends \Encore\Container\ServiceProvider
{
    /*
    |--------------------------------------------------------------------------
    | Register Commands
    |--------------------------------------------------------------------------
    |
    | Here you can register commands which you can run on the console.
    | Commands can be used to help you out with all sorts of things
    | including compiling, debugging and more.
    |
    */

    public function commands()
    {
        return [
            'App\Console\Hi'
        ];
    }
}