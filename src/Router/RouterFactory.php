<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 29/07/2016
 * Time: 11:23
 */

namespace DesignPatterns\Router;


use DesignPatterns\Container\FactoryInterface;
use Interop\Container\ContainerInterface;

class RouterFactory implements FactoryInterface
{

    public function CreateService(ContainerInterface $container)
    {
        $config = $container->get('configuration');

        if (!$config->offsetExists('routes')) {
            $config->offsetSet('routes', []);

        }

        $configRoute = $config->offsetGet('routes')->getArrayCopy();

        return new Router($configRoute, $container);
    }

}