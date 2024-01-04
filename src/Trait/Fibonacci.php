<?php

namespace SimpleCalculator\Trait;

/**
 * フィボナッチ数列に関する関数を管理する
 * 
 * @package SimpleCalculator\Trait
 */
trait Fibonacci
{
    /**
     * number 番目のフィボナッチ数を求める
     * 
     * @param int $number
     * @return int
     */
    public function fibonacci(int $number): int
    {
        // Fn = x * (a - b)の形にする

        // x = 1 / sqrt(5)
        // a = ((1 + sqrt(5)) / 2) ** number
        // b = ((1 - sqrt(5)) / 2) ** number

        // 0以下の数はフィボナッチ数に含まれない
        if ($number <= 0) throw new \RuntimeException("The fibonacci of a negative number is not defined.");

        $x = 1 / sqrt(5);
        $a = ((1 + sqrt(5)) / 2) ** $number;
        $b = ((1 - sqrt(5)) / 2) ** $number;

        $result = $x * ($a - $b);

        // 計算結果を丸める
        return round($result);
    }
}
