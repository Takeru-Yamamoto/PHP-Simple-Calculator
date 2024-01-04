<?php

namespace SimpleCalculator\Trait;

/**
 * 階乗に関する関数を管理する
 * 
 * @package SimpleCalculator\Trait
 */
trait Factorial
{
    /**
     * number の階乗を求める
     * 
     * @param int $number
     * @param bool $returnString
     * @return string|int
     */
    public function factorial(int $number, bool $returnString = false): string|int
    {
        // 0以下の数の階乗は定義されていない
        if ($number < 0) throw new \RuntimeException("The factorial of a negative number is not defined.");

        // 0の階乗は1
        if ($number === 0) return $returnString ? "1" : 1;

        // int型の最大値を超える可能性があるため、string型で計算する
        $result = "1";

        for ($i = 1; $i <= $number; $i++) {
            $result = bcmul($result, $i);
        }

        return $returnString ? $result : (int)$result;
    }
}
