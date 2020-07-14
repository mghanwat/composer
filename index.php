<?php
require 'vendor/autoload.php';
echo Product\add(10,20);
$obj = new Product\ClassN\CalculatorClass(2,4);
echo $obj->add();


?>