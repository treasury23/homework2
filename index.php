<?php
/**
 * Created by JetBrains PhpStorm.
 * User: geekhub
 * Date: 21.10.13
 * Time: 21:45
 * To change this template use File | Settings | File Templates.
 */

require_once 'class/Calculator.php';

$obj = new Calculator(10, '+', 20);
echo $obj->showResult().'<br>';
$obj1 = new Calculator(10, '%', 20);
echo $obj1->showResult().'<br>';
$obj2 = new Calculator(10, '/', 0);
echo $obj2->showResult().'<br>';

