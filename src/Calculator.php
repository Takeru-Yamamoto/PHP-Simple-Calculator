<?php

namespace SimpleCalculator;

use SimpleCalculator\Interface\CalculatorInterface;

use SimpleCalculator\Trait\Operate;
use SimpleCalculator\Trait\Check;
use SimpleCalculator\Trait\Factorial;
use SimpleCalculator\Trait\Prime;
use SimpleCalculator\Trait\Fibonacci;

/**
 * 様々な計算を行う
 * 
 * @package SimpleCalculator
 */
class Calculator implements CalculatorInterface
{
    use Operate;
    use Check;
    use Factorial;
    use Prime;
    use Fibonacci;
}
