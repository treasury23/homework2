<?php
/**
 * Created by JetBrains PhpStorm.
 * User: geekhub
 * Date: 21.10.13
 * Time: 21:03
 * To change this template use File | Settings | File Templates.
 */

abstract class ACalc
{
    public $number1;
    public $operator;
    public $number2;

    public function decision()
    {
        $result="";
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
}