<?php

use resource\ScientificCalculator;
use resource\FinancialCalculator;
use resource\SimpleCalculator;

include 'autoload.php';

$obj = new ScientificCalculator();
$obj->setType('ScientificCalculator');
$obj->setManufacturer('Casio');
$obj->setWeight('340');
$obj->setColor('white');
$obj->setSize('210*155*30');
echo "<pre>" .$obj->showInfo()."</pre>";

$obj->setSquareNumber(9);
echo '<p>Square root of '.$obj->getSquareNumber().' = '.$obj->square().'</p>';

$obj1 = new FinancialCalculator();
$obj1->setType('FinancialCalculator');
$obj1->setManufacturer('Sitizen');
$obj1->setWeight('390');
$obj1->setColor('black');
$obj1->setSize('310*240*60');
echo "<pre>".$obj1->showInfo()."</pre>";

$obj1->setSumCredit('17000');
$obj1->setDayMonth('31');
$obj1->setRate('0.119');
echo $obj1->percentage();

$obj3 = new SimpleCalculator(123, '+', 123);
$obj1->setType('SimpleCalculator');
$obj1->setManufacturer('Assistant');
$obj1->setWeight('120');
$obj1->setColor('silver');
$obj1->setSize('100*80*30');
echo "<pre>".$obj1->showInfo()."</pre>";

echo '<p>'.$obj3->showDecision().'</p>';
