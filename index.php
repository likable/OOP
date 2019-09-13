<?php

require_once 'classes/Car.php';

function debug($data)
{
    echo "<pre>" . print_r($data) . "</pre>";
}

$car1 = new Car('BMW', 'чёрный');

$car2 = new Car('Mazda', 'белый', 220);

echo $car1->getCarInfo();
echo $car2->getCarInfo();