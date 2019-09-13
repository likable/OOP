<?php

require_once 'classes/Car.php';

$car1 = new Car();

$car1->color = 'чёрный';
$car1->brand = 'BMW';

var_dump($car1);
echo "<br>";

$car2 = new Car();

$car2->color = 'белый';
$car2->brand = 'mazda';
$car2->speed = 220;

var_dump($car2);
echo "<br>";

echo $car1->getCarInfo();
echo $car2->getCarInfo();