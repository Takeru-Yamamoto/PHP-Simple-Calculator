<?php

namespace SimpleCalculator\Trait;

/**
 * 素数に関する関数を管理する
 * 
 * @package SimpleCalculator\Trait
 * 
 * @method bool isPrime(int $number)
 * @method int|float power(int|float $number, int $exponent)
 */
trait Prime
{
    /**
     * number の素因数として primeNumber が何回登場するかを求める
     *
     * @param int $number
     * @param int $primeNumber
     * @return int
     */
    public function primeCount(int $number, int $primeNumber): int
    {
        // primeNumberが素数でない場合は0を返す
        if (!$this->isPrime($primeNumber)) return 0;

        // 1以下の数は素因数分解できない
        if ($number <= 1) return 0;

        // 素数は素因数分解できない
        if ($this->isPrime($number)) return $number === $primeNumber ? 1 : 0;

        $count = 0;

        // 割り切れるだけ割る
        while ($number % $primeNumber === 0) {
            $count++;
            $number /= $primeNumber;
        }

        return $count;
    }

    /**
     * number の素因数分解を求める
     * 
     * @param int $number
     * @return array<int, int>
     */
    public function primeFactorization(int $number): array
    {
        $result = [];

        // 1以下の数は素因数分解できない
        if ($number <= 1) return $result;

        // 素数は素因数分解できない
        if ($this->isPrime($number)) return [$number];

        // 偶数の場合は2で割り切れるだけ割る
        if ($number % 2 === 0) {
            $count = $this->primeCount($number, 2);

            $result[2] = $count;
            $number /= $this->power(2, $count);

            // 割り切れなくなったら終了
            if ($number === 1) return $result;
        }

        // 平方根の整数部分までの数で割り切れるかどうかを確認する
        $max = floor(sqrt($number));
        $count = 0;

        // numberは奇数なので3から始めて2ずつ増やしていく
        for ($i = 3; $i <= $max; $i += 2) {

            // 割り切れるだけ割る
            $count = $this->primeCount($number, $i);

            if ($count > 0) {
                $result[$i] = $count;
                $number /= $this->power($i, $count);
            }

            // 割り切れなくなったら終了
            if ($number === 1) return $result;
        }

        // numberはmaxより大きい素数
        $result[$number] = 1;

        return $result;
    }
}
