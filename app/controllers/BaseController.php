<?php

use Encore\Container\ContainerAwareInterface;
use Encore\Kernel\Controller as KernelController;

abstract class BaseController extends KernelController implements ContainerAwareInterface
{
    
}