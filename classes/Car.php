<?php

class Car
{
    
    public $color;
    public $wheels;
    public $speed;
    public $brand;
    
    public function __construct($brand, $color, $speed = 180, $wheels = 4)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }
    
    public function __destruct()
    {
        var_dump($this);
        echo "<br>";
    }
    
    public function getCarInfo()
    {
        return "<b>Информация об автомобиле:</b><br>"
             . "Марка автомобиля: {$this->brand} <br>"
             . "Цвет кузова: {$this->color} <br>"
             . "Количество колёс: {$this->wheels} <br>"
             . "Максимальная скорость: {$this->speed} км/ч <br>";
    }
    
}
