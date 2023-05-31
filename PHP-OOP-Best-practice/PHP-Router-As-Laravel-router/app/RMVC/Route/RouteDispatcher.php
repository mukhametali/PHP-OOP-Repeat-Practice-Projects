<?php

namespace App\RMVC\Route;

class RouteDispatcher
{
    private string $requestUri = '/';
    private array $paramMap =[];


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
        $this->setParamMap();

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


    }

    private function setParamMap()
    {
        $routeArray = explode('/',$this->routeConfiguration->route);
        foreach ($routeArray as $paramKey => $param)
        {
            if (preg_match('/{.*}/', $param))
            {
                $this->paramMap[$paramKey] = preg_replace('/(^{)|(}*)/','' ,$param);
            }
        }
        echo "<pre>";
        var_dump($this->paramMap);
        echo "</pre>";
    }


}























