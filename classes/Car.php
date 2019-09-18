<?php

class Car
{
    
    public $color;
    public $wheels;
    public $speed;
    public $brand;
    
    const TEST_CAR = "Прототип";
    const TEST_CAR_SPEED = 300;
    
    public static $countCar = 0;
    
    public function __construct($brand, $color, $speed = 180, $wheels = 4)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        self::$countCar++;
    }
    
    public function __destruct()
    {
        echo "Работает деструктор: ";
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
    
    public static function getCount() 
    {
        return self::$countCar;
    }
    
    public function getPrototypeInfo()
    {
        return "<b>Информация о тестовом автомобиле:</b><br>"
             . "Марка автомобиля: " . self::TEST_CAR . "<br>"
             . "Максимальная скорость: " . self::TEST_CAR_SPEED . " км/ч <br>";
    }
    
}
