<?php

namespace Dev;

class Provider extends \Encore\Container\ServiceProvider
{
    public function register()
    {
        $this->container['config']->addPath(__DIR__.'/../config');
    }
}
