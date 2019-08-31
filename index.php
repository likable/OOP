<?php

require_once 'classes/FirstClass.php';
require_once 'classes/SecondClass.php';

$o11 = new FirstClass();
$o12 = new FirstClass();

$o21 = new SecondClass();
$o22 = new SecondClass();

var_dump($o11);
echo "<br>";
var_dump($o12);
echo "<br>";
var_dump($o21);
echo "<br>";
var_dump($o22);
echo "<br>";