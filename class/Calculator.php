<?php
/**
 * Created by JetBrains PhpStorm.
 * User: geekhub
 * Date: 21.10.13
 * Time: 21:28
 * To change this template use File | Settings | File Templates.
 */

require_once 'class/AbstractCalculator.php';
require_once 'class/CalculatorInterface.php';

class Calculator extends AbstractCalculator implements CalculatorInterface
{
    function __construct ($number1, $operator, $number2)
    {
        $this->number1=$number1;
        $this->operator=$operator;
        $this->number2=$number2;
    }

    public function getNumber1()
    {
        return $this->number1;
    }

    public function setNumber1($number1)
    {
        return $this->number1 = $number1;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function setOperator($operator)
    {
        return $this->operator = $operator;
    }

    public function getNumber2()
    {
        return $this->number2;
    }

    public function setNumber2($number2)
    {
        return $this->number2 = $number2;
    }

    public function showResult()
    {
        return $this->getNumber1()." ".$this->getOperator()." ".$this->getNumber2()." = ".$this->decision();
    }
}