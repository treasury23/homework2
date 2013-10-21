<?php
/**
 * Created by JetBrains PhpStorm.
 * User: geekhub
 * Date: 21.10.13
 * Time: 21:45
 * To change this template use File | Settings | File Templates.
 */

require_once 'class/Calc.class.php';

$obj = new Calc(10, '+', 20);
$obj->showResult();