<?php

class MainController extends BaseController
{
    protected $view = 'test';

    public function start()
    {
        $this->view->getElementById('window')->show();
    }

    public function quit()
    {
        $this->container->quit();
    }
}
