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
        //1.Cleaning up the route string
        $this->saveRequestUri();
        //2.We split the route string into an array and store the position of the parameter and its name in a new array
        $this->setParamMap();
        //3.We split the query string into an array and check if there is a position in this array, like the position of the parameter
        //3.1 If there is such a position, then we bring the query string into a regular expression
        $this->makeRegexRequest();


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

    }

    private function makeRegexRequest()
    {
        $requestUriArray = explode('/',$this->requestUri);

        foreach ($this->paramMap as $paramKey => $param)
        {
            if (!isset($requestUriArray[$paramKey]))
            {
                return;
            }

            $requestUriArray[$paramKey] = '{.*}';
        }

        $this->requestUri = implode('/',$requestUriArray);
        $this->prepareRegex();

        echo "<pre>";
        var_dump($this->requestUri);
        echo "</pre>";
    }

    private function prepareRegex()
    {
        $this->requestUri = str_replace('/','\/', $this->requestUri);
    }


}























