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

offerCase($notebook);

debug($book);

$mail = new \PHPMailer\PHPMailer\PHPMailer();
debug($mail);









