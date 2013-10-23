<?php

abstract class AbstractCalculator
{
    protected  $number1;
    protected  $operator;
    protected  $number2;

    public function decision()
    {
        switch ($this->operator) {
            case '+':
                $result = $this->number1 + $this->number2;
                break;
            case '-':
                $result = $this->number1 - $this->number2;
                break;
            case '*':
                $result = $this->number1 * $this->number2;
                break;
            case '/':
                if ($this->number2 == 0) {
                    $result = 'you can not divide by zero';
                } else {
                    $result = $this->number1 / $this->number2;
                }
                break;
            default:
                $result = "unknown operator '$this->operator'";
        }
        return $result;
    }
    abstract public function getOperator();
    abstract public function setOperator($operator);
}