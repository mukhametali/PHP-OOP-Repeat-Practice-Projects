<?php

use classes\BookProduct;
use interfaces\IGadget;
use classes\NotebookProduct;

error_reporting(-1);
/*require_once "classes/Product.php";
require_once "classes/I3D.php";
require_once "classes/IGadget.php";
require_once "classes/NotebookProduct.php";
require_once "classes/BookProduct.php";*/



function autoloderClass($class)
{
    $class = str_replace("\\",'/', $class);
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file))
    {
        require_once $file;
    }
}

/*function autoloderInterface($class)
{
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file))
    {
        require_once $file;
    }
}*/

spl_autoload_register('autoloderClass');
//spl_autoload_register('autoloderInterface');

            


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

//var_dump($notebook instanceof NotebookProduct);

offerCase($notebook);
//offerCase($book);


debug($book);

echo $book->getProduct();






