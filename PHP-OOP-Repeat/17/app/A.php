<?php

namespace app;

class A
{
    private static $instanse;

    private function __construct()
    {

    }

    public static function getInstanse()
    {
        if (self::$instanse === null)
        {
            self::$instanse = new self();
        }
        return self::$instanse;
    }

}