<?php

namespace App\Provider;

use Library\Router;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class RouterServiceProvider
 * @package App\Provider
 */
class RouterServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['router'] = new Router();
    }
}