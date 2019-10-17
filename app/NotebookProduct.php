<?php

namespace app;

use core\interfaces\IGadget;
use core\Product;
use app\traits\TColor;

class NotebookProduct extends Product implements IGadget
{
    
    use TColor;
    
    public $cpu;
    
    public function __construct($name, $price, $cpu) 
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }
    
    public function getCase()
    {
        
    }
    
    public function getProduct() {
        $out = parent::getProduct();
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }
    
    public function getCpu() 
    {
        return $this->cpu;
    }
    
    public function addProduct($name, $price, $numPages = 0)
    {
        var_dump($name);
        var_dump($price);
        var_dump($numPages);
    }
    
}
