<?php

class MainController
{
    public function start()
    {
        View::make('main')
            ->getFrame('Frame')
            ->bind('QuitButton', 'clicked', function() {
                App::quit();
            })
            ->show();
    }
}
