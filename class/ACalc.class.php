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

    function __construct ($number1, $operator, $number2)
    {
        $this->number1=$number1;
        $this->operator=$operator;
        $this->number2=$number2;
    }
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
                    $result = 'Делить на ноль нельзя';
                } else {
                    $result = $this->number1 / $this->number2;
                }
                break;
            default:
                echo "Неизвестный оператор '$this->operator'";
        }
        return $result;
    }
}