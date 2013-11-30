<?php

class MainController
{
    public function start()
    {
        View::make(__DIR__.'/../views/main.xrc')
            ->getFrame('Frame')
            ->bind('QuitButton', 'button_clicked', function() {
                App::quit();
            })
            ->show();
    }
}
