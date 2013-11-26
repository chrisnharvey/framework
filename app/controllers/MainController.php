<?php

class MainController
{
    public function start()
    {
        View::make('main')
            ->bind('quitButton', 'clicked', function() {
                exit('Thank you for using EncorePHP');
            })
            ->getFrame('Frame')
            ->show();
    }
}