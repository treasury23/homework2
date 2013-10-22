<?php

interface CalculatorInterface
{
    public function getNumber1();
    public function setNumber1($number1);
    public function getOperator();
    public function setOperator($operator);
    public function getNumber2();
    public function setNumber2($number2);
    public function showResult();
}