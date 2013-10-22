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
$obj->showResult();
$obj1 = new Calculator(10, '%', 20);
$obj1->showResult();
$obj2 = new Calculator(10, '/', 0);
$obj2->showResult();

