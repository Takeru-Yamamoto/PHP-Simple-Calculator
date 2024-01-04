<?php

namespace SimpleCalculator\Proxy\Interface;

use SimpleCalculator\Interface\CalculatorInterface;

/**
 * Proxyを経由してstaticにアクセスされるManagerのInterface
 * 
 * @package SimpleCalculator\Proxy\Interface
 */
interface ManagerInterface extends CalculatorInterface
{
    /**
     * Timerのインスタンスを生成する
     *
     * @return \SimpleCalculator\Interface\CalculatorInterface
     */
    public function make(): CalculatorInterface;



    /*----------------------------------------*
     * Operate
     *----------------------------------------*/

    /**
     * augend に addend を足す
     * 
     * @param int|float $augend
     * @param int|float $addend
     * @param bool $isRound
     * @return int|float
     */
    public function add(int|float $augend, int|float $addend, bool $isRound = false): int|float;

    /**
     * minuend から subtrahend を引く
     * 
     * @param int|float $minuend
     * @param int|float $subtrahend
     * @param bool $isRound
     * @return int|float
     */
    public function sub(int|float $minuend, int|float $subtrahend, bool $isRound = false): int|float;

    /**
     * multiplicand に multiplier を掛ける
     * 
     * @param int|float $multiplicand
     * @param int|float $multiplier
     * @param bool $isRound
     * @return int|float
     */
    public function mul(int|float $multiplicand, int|float $multiplier, bool $isRound = false): int|float;

    /**
     * dividend を divisor で割る
     * 
     * @param int|float $dividend
     * @param int|float $divisor
     * @param bool $isRound
     * @return int|float
     */
    public function div(int|float $dividend, int|float $divisor, bool $isRound = false): int|float;

    /**
     * number の exponent 乗を求める
     * 
     * @param int|float $number
     * @param int $exponent
     * @return int|float
     */
    public function pow(int|float $number, int $exponent): int|float;
}
