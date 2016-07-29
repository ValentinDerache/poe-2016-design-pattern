<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 29/07/2016
 * Time: 10:29
 */

namespace DesignPatterns\Router;


use DesignPatterns\Container\Container;
use Interop\Container\ContainerInterface;

class Router
{

    private $config = array();
    private $container;

    /**
     * Router constructor.
     * @param array $config
     */
    public function __construct(array $config, ContainerInterface $container)
    {
        $this->config = $config;
        $this->container = $container;
    }

    public function route()
    {
        $route = $_GET['route'];

        if(isset($this->config[$route])) {
            $this->container;
            //$this->container->get();

        } else {
            header("HTTP/1.0 404 Not Found");
            exit;
        }
    }


}