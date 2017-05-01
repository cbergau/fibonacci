<?php

namespace Bergau;

class RecursiveFibonacciCalculator implements FibonacciCalculator
{
    /**
     * @param int $number
     *
     * @return int
     */
    public function getFibonacci(int $number): int
    {
        if ($number === 0 || $number === 1) {
            return $number;
        }

        return $this->getFibonacci($number - 1) + $this->getFibonacci($number - 2);
    }
}
