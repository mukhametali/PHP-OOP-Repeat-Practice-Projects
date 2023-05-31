<?php

use aliCore\interfaces\IGadget;
use app\{BookProduct, NotebookProduct};


require_once __DIR__ . "/vendor/autoload.php";


error_reporting(-1);

function debug($data)
{
    echo "<pre>" . print_r($data,1) . "</pre>";
}

function offerCase (IGadget $product)
{
    echo "<p>Offer case for gadget {$product->getName()} </p>";
}

$book = new BookProduct('Harry Potter',200,1500);
$notebook = new NotebookProduct('Philips',10000,'AMD');

/*offerCase($notebook);*/

/*debug($book);
debug($notebook);*/

$a = new \app\A();
$b = new \app\B();

$a->getTest();
echo "<br>";
$b->getTest();
echo "<br>";
$b->getTest2();
echo "<br>";

$book->doAction1()->doAction2();
















