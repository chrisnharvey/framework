<?php

class MainController
{
    public function start()
    {
        View::make('main')
            ->getFrame('Frame')
            ->bind('QuitButton', 'button_clicked', function() {
                App::quit();
            })
            ->show();
    }
}
