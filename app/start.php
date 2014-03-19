<?php

/*
|--------------------------------------------------------------------------
| Register Launching Callbacks
|--------------------------------------------------------------------------
|
| Here you can register callbacks which you want to be run when your
| application first starts. For example, you might want to instantiate
| your main controller and open your main window.
|
*/

App::launching(function($app) {
    $app['MainController']->start();
});

/*
|--------------------------------------------------------------------------
| Register Quitting Callbacks
|--------------------------------------------------------------------------
|
| Here you can register callbacks which you want to be run when your
| application is about to quit. For example, you might want to end
| any open connections to a third-party service.
|
*/

App::quitting(function() {
    echo 'Thank you for using EncorePHP'.PHP_EOL;
});
