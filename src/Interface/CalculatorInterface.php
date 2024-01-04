<?php

namespace SimpleCalculator\Interface;

/**
 * CalculatorのInterface
 * 
 * @package SimpleCalculator\Interface
 */
interface CalculatorInterface
{
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
    public function addition(int|float $augend, int|float $addend, bool $isRound = false): int|float;

    /**
     * minuend から subtrahend を引く
     * 
     * @param int|float $minuend
     * @param int|float $subtrahend
     * @param bool $isRound
     * @return int|float
     */
    public function subtraction(int|float $minuend, int|float $subtrahend, bool $isRound = false): int|float;

    /**
     * multiplicand に multiplier を掛ける
     * 
     * @param int|float $multiplicand
     * @param int|float $multiplier
     * @param bool $isRound
     * @return int|float
     */
    public function multiplication(int|float $multiplicand, int|float $multiplier, bool $isRound = false): int|float;

    /**
     * dividend を divisor で割る
     * 
     * @param int|float $dividend
     * @param int|float $divisor
     * @param bool $isRound
     * @return int|float
     */
    public function division(int|float $dividend, int|float $divisor, bool $isRound = false): int|float;

    /**
     * number の exponent 乗を求める
     * 
     * @param int|float $number
     * @param int $exponent
     * @return int|float
     */
    public function power(int|float $number, int $exponent): int|float;

    /**
     * number の 2 乗を求める
     * 
     * @param int|float $number
     * @return int|float
     */
    public function squared(int|float $number): int|float;

    /**
     * number の 3 乗を求める
     * 
     * @param int|float $number
     * @return int|float
     */
    public function cubed(int|float $number): int|float;



    /*----------------------------------------*
     * Check
     *----------------------------------------*/

    /**
     * number が奇数かどうかを判定する
     * 
     * @param int $number
     * @return bool
     */
    public function isOdd(int $number): bool;

    /**
     * number が偶数かどうかを判定する
     * 
     * @param int $number
     * @return bool
     */
    public function isEven(int $number): bool;

    /**
     * number が素数かどうかを判定する
     * 
     * @param int $number
     * @return bool
     */
    public function isPrime(int $number): bool;



    /*----------------------------------------*
     * Factorial
     *----------------------------------------*/

    /**
     * number の階乗を求める
     * 
     * @param int $number
     * @param bool $returnString
     * @return string|int
     */
    public function factorial(int $number, bool $returnString = false): string|int;



    /*----------------------------------------*
     * Prime
     *----------------------------------------*/

    /**
     * number の素因数として primeNumber が何回登場するかを求める
     * 
     * @param int $number
     * @param int $primeNumber
     * @return int
     */
    public function primeCount(int $number, int $primeNumber): int;

    /**
     * number の素因数分解を求める
     * 
     * @param int $number
     * @return array<int, int>
     */
    public function primeFactorization(int $number): array;



    /*----------------------------------------*
     * Fibonacci
     *----------------------------------------*/

    /**
     * number 番目のフィボナッチ数を求める
     * 
     * @param int $number
     * @return int
     */
    public function fibonacci(int $number): int;
}
