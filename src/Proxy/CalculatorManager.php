<?php

namespace SimpleCalculator\Proxy;

use SimpleCalculator\Proxy\Interface\ManagerInterface;

use SimpleCalculator\Calculator;

/**
 * Proxyを経由してstaticにアクセスされるManager
 * 
 * @package SimpleCalculator\Proxy
 */
class CalculatorManager implements ManagerInterface
{
    /**
     * Timerのインスタンスを生成する
     *
     * @return \SimpleCalculator\Calculator
     */
    public function make(): Calculator
    {
        return new Calculator();
    }



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
    public function addition(int|float $augend, int|float $addend, bool $isRound = false): int|float
    {
        return $this->make()->addition($augend, $addend, $isRound);
    }

    /**
     * augend に addend を足す
     * 
     * @param int|float $augend
     * @param int|float $addend
     * @param bool $isRound
     * @return int|float
     */
    public function add(int|float $augend, int|float $addend, bool $isRound = false): int|float
    {
        return $this->addition($augend, $addend, $isRound);
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
        return $this->make()->subtraction($minuend, $subtrahend, $isRound);
    }

    /**
     * minuend から subtrahend を引く
     * 
     * @param int|float $minuend
     * @param int|float $subtrahend
     * @param bool $isRound
     * @return int|float
     */
    public function sub(int|float $minuend, int|float $subtrahend, bool $isRound = false): int|float
    {
        return $this->subtraction($minuend, $subtrahend, $isRound);
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
        return $this->make()->multiplication($multiplicand, $multiplier, $isRound);
    }

    /**
     * multiplicand に multiplier を掛ける
     * 
     * @param int|float $multiplicand
     * @param int|float $multiplier
     * @param bool $isRound
     * @return int|float
     */
    public function mul(int|float $multiplicand, int|float $multiplier, bool $isRound = false): int|float
    {
        return $this->multiplication($multiplicand, $multiplier, $isRound);
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
        return $this->make()->division($dividend, $divisor, $isRound);
    }

    /**
     * dividend を divisor で割る
     * 
     * @param int|float $dividend
     * @param int|float $divisor
     * @param bool $isRound
     * @return int|float
     */
    public function div(int|float $dividend, int|float $divisor, bool $isRound = false): int|float
    {
        return $this->division($dividend, $divisor, $isRound);
    }

    /**
     * number の累乗を取得する
     *
     * @param int|float $number
     * @param int $exponent
     * @return int|float
     */
    public function power(int|float $number, int $exponent): int|float
    {
        return $this->make()->power($number, $exponent);
    }

    /**
     * number の exponent 乗を求める
     *
     * @param int|float $number
     * @param int $exponent
     * @return int|float
     */
    public function pow(int|float $number, int $exponent): int|float
    {
        return $this->power($number, $exponent);
    }

    /**
     * number の 2 乗を求める
     *
     * @param int|float $number
     * @return int|float
     */
    public function squared(int|float $number): int|float
    {
        return $this->make()->squared($number);
    }

    /**
     * number の 3 乗を求める
     *
     * @param int|float $number
     * @return int|float
     */
    public function cubed(int|float $number): int|float
    {
        return $this->make()->cubed($number);
    }



    /*----------------------------------------*
     * Check
     *----------------------------------------*/

    /**
     * number が奇数かどうかを判定する
     *
     * @param int $number
     * @return bool
     */
    public function isOdd(int $number): bool
    {
        return $this->make()->isOdd($number);
    }

    /**
     * number が偶数かどうかを判定する
     *
     * @param int $number
     * @return bool
     */
    public function isEven(int $number): bool
    {
        return $this->make()->isEven($number);
    }

    /**
     * number が素数かどうかを判定する
     * 
     * @param int $number
     * @return bool
     */
    public function isPrime(int $number): bool
    {
        return $this->make()->isPrime($number);
    }



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
    public function factorial(int $number, bool $returnString = false): string|int
    {
        return $this->make()->factorial($number, $returnString);
    }



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
    public function primeCount(int $number, int $primeNumber): int
    {
        return $this->make()->primeCount($number, $primeNumber);
    }

    /**
     * number の素因数分解を求める
     * 
     * @param int $number
     * @return array
     */
    public function primeFactorization(int $number): array
    {
        return $this->make()->primeFactorization($number);
    }



    /*----------------------------------------*
     * Fibonacci
     *----------------------------------------*/

    /**
     * number 番目のフィボナッチ数を求める
     * 
     * @param int $number
     * @return int
     */
    public function fibonacci(int $number): int
    {
        return $this->make()->fibonacci($number);
    }
}
