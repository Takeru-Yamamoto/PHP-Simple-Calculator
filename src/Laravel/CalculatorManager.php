<?php

namespace SimpleCalculator\Laravel;

use SimpleCalculator\Laravel\Interface\ManagerInterface;
use SimpleCalculator\Proxy\CalculatorManager as SimpleCalculatorManager;

use SimpleCalculator\Laravel\Calculator;

/**
 * Facadeを経由してstaticにアクセスされるManager
 * 
 * @package SimpleCalculator\Laravel
 */
class CalculatorManager extends SimpleCalculatorManager implements ManagerInterface
{
    /**
     * Timerのインスタンスを生成する
     *
     * @return \SimpleCalculator\Laravel\Calculator
     */
    public function make(): Calculator
    {
        return new Calculator();
    }
}
