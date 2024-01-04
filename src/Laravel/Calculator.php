<?php

namespace SimpleCalculator\Laravel;

use SimpleCalculator\Laravel\Interface\CalculatorInterface;

use SimpleCalculator\Calculator as SimpleCalculator;

/**
 * \SimpleCalculator\Calculatorを継承し、Laravel用に拡張したCalculator
 * 
 * @package SimpleCalculator\Laravel
 */
class Calculator extends SimpleCalculator implements CalculatorInterface
{
}
