<?php

use core\interfaces\IGadget;
use app\{BookProduct, NotebookProduct};

error_reporting(-1);

require_once __DIR__ . "/vendor/autoload.php";

//function autoloader1($class)
//{
//    $class = str_replace("\\", "/", $class);
//    $file = __DIR__ . "/{$class}.php";
//    if (file_exists($file)) {
//        require_once $file;
//    }
//}
//
//spl_autoload_register("autoloader1");

function debug($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct("Три мушкетёра", 20, 1000);
$notebook = new NotebookProduct("Dell", 1000, "Intel");

$book->test = "Hello";

echo $book->name;

//offerCase($notebook);

debug($book);
//debug($notebook);

//echo $book->getProduct();


//echo $book;
