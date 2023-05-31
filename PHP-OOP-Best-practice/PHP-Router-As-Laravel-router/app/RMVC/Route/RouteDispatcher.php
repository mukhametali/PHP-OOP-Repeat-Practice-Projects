<?php

namespace App\RMVC\Route;

class RouteDispatcher
{
    private string $requestUri = '/';


    private RouteConfiguration $routeConfiguration;

    /**
     * @param RouteConfiguration $routeConfiguration
     */
    public function __construct(RouteConfiguration $routeConfiguration)
    {
        $this->routeConfiguration = $routeConfiguration;
    }

    public function process()
    {

        $this->saveRequestUri();

    }

    private function clean($str):string
    {
        return preg_replace('/(^\/)|(\/$)/','',$str);
    }

    private function saveRequestUri()
    {
        if ($_SERVER['REQUEST_URI'] !== '/')
        {
            $this->requestUri = $this->clean($_SERVER['REQUEST_URI']);
            $this->routeConfiguration->route = $this->clean($this->routeConfiguration->route);
        }

        echo "<pre>";
        var_dump($this->requestUri);
        var_dump($this->routeConfiguration->route);
        echo "</pre>";
    }


}























