<?php

namespace SimpleCalculator\Trait;

/**
 * 簡単な計算を管理する
 * 
 * @package SimpleCalculator\Trait
 */
trait Operate
{
    /*----------------------------------------*
     * Four Arithmetic
     *----------------------------------------*/

    /**
     * augend に addend を足す
     *
     * @param int|float $augend
     * @param int|float $addend
     * @param bool $isRound
     * @return int|float
     */
    public function addition(int|float $augend, int|float $addend, bool $isRound = false): int|float
    {
        $result = $augend + $addend;

        return $isRound ? round($result) : $result;
    }

    /**
     * minuend から subtrahend を引く
     *
     * @param int|float $minuend
     * @param int|float $subtrahend
     * @param bool $isRound
     * @return int|float
     */
    public function subtraction(int|float $minuend, int|float $subtrahend, bool $isRound = false): int|float
    {
        $result = $minuend - $subtrahend;

        return $isRound ? round($result) : $result;
    }

    /**
     * multiplicand に multiplier を掛ける
     *
     * @param int|float $multiplicand
     * @param int|float $multiplier
     * @param bool $isRound
     * @return int|float
     */
    public function multiplication(int|float $multiplicand, int|float $multiplier, bool $isRound = false): int|float
    {
        $result = $multiplicand * $multiplier;

        return $isRound ? round($result) : $result;
    }

    /**
     * dividend を divisor で割る
     *
     * @param int|float $dividend
     * @param int|float $divisor
     * @param bool $isRound
     * @return int|float
     */
    public function division(int|float $dividend, int|float $divisor, bool $isRound = false): int|float
    {
        $result = $dividend / $divisor;

        return $isRound ? round($result) : $result;
    }



    /*----------------------------------------*
     * Power
     *----------------------------------------*/

    /**
     * number の累乗を求める
     *
     * @param int|float $number
     * @param int $exponent
     * @return int|float
     */
    public function power(int|float $number, int $exponent): int|float
    {
        return pow($number, $exponent);
    }

    /**
     * number の2乗を求める
     *
     * @param int|float $number
     * @return int|float
     */
    public function squared(int|float $number): int|float
    {
        return $this->power($number, 2);
    }

    /**
     * number の3乗を求める
     *
     * @param int|float $number
     * @return int|float
     */
    public function cubed(int|float $number): int|float
    {
        return $this->power($number, 3);
    }
}
