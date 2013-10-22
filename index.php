<?php

require_once 'class/Calculator.php';

$obj = new Calculator(10, '+', 20);
echo $obj->showResult().'<br>';
$obj1 = new Calculator(10, '%', 20);
echo $obj1->showResult().'<br>';
$obj2 = new Calculator(10, '/', 0);
echo $obj2->showResult().'<br>';

