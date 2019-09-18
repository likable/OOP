<?php

require_once 'classes/Car.php';

function debug($data)
{
    echo "<pre>" . print_r($data) . "</pre>";
}

echo Car::$countCar . "<br>";

$car1 = new Car('BMW', 'чёрный');

echo Car::$countCar . "<br>";

$car2 = new Car('Mazda', 'белый', 220);

echo Car::getCount() . "<br>";

echo $car1->getCarInfo();
echo $car2->getCarInfo();

echo $car1->getPrototypeInfo();
echo Car::TEST_CAR_SPEED . "<br>";
