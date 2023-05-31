<?php

namespace app;

use aliCore\interfaces\I3D;
use aliCore\Product;

class BookProduct extends Product implements I3D
{

    public $numPages;

    public $action1;
    public $action2;

    const TEST = 20;


    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(5);
    }

    public function __toString()
    {
        return $this->getProduct();
    }

    public function test()
   {

   }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Price without discount: {$this->price}<br>";
        $out .= "NumPages: {$this->numPages}<br>";
        $out .= "Discount: {$this->getDiscount()}%<br>";
        return $out;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function addProduct($name, $price, $numPages = 0)
    {
        var_dump($name);
        var_dump($price);
        var_dump($numPages);
    }

    public function doAction1()
    {
        echo $this->action1 = '<p>Do action 1</p>';
        return $this;
    }

    public function doAction2()
    {
        echo $this->action2 = '<p>Do action 2</p>';
        return $this;
    }

}