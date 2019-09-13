<?php

class Car
{
    
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;
    
    public function getCarInfo()
    {
        return "Марка автомобиля: {$this->brand} <br>"
             . "Цвет кузова: {$this->color} <br>"
             . "Количество колёс: {$this->wheels} <br>"
             . "Максимальная скорость: {$this->speed} км/ч <br>";
    }
    
}
