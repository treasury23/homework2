<?php
/**
 * Created by JetBrains PhpStorm.
 * User: geekhub
 * Date: 21.10.13
 * Time: 20:50
 * To change this template use File | Settings | File Templates.
 */

interface ICalc
{
    public function getNumber1();
    public function getOperator();
    public function getNumber2();
    public function decision();
    public function showResult();
}