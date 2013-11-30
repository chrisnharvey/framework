<?php

class MainController
{
    public function start()
    {
        View::make('main')
            ->bind('QuitButton', 'clicked', function() {
                App::quit();
            })
            ->getFrame('Frame')
            ->show();
    }
}
