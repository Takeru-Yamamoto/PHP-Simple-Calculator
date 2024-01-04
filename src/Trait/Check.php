<?php

namespace SimpleCalculator\Trait;

/**
 * 数値に対する確認を管理する
 * 
 * @package SimpleCalculator\Trait
 */
trait Check
{
    /**
     * number が奇数かどうかを判定する
     *
     * @param int $number
     * @return bool
     */
    public function isOdd(int $number): bool
    {
        return $number & 1;
    }

    /**
     * number が偶数かどうかを判定する
     *
     * @param int $number
     * @return bool
     */
    public function isEven(int $number): bool
    {
        return !$this->isOdd($number);
    }

    /**
     * number が素数かどうかを判定する
     * 
     * @param int $number
     * @return bool
     */
    public function isPrime(int $number): bool
    {
        /* numberが1以下 */
        if ($number <= 1) return false;

        /* numberが2 */
        if ($number === 2) return true;

        /* numberが2以外の偶数 */
        if ($this->isEven($number)) return false;

        /* numberの平方根が整数 */
        $sqrt = sqrt($number);

        if (is_int($sqrt)) return false;

        // 平方根の整数部分までの数で割り切れるかどうかを確認する
        $max = floor($sqrt);

        // numberは奇数なので3から始めて2ずつ増やしていく
        for ($i = 3; $i <= $max; $i += 2) {
            // 割り切れたら素数ではない
            if ($number % $i == 0) return false;
        }

        return true;
    }
}
