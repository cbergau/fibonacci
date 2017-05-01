<?php

namespace Bergau;

class RoundingFibonacciCalculator implements FibonacciCalculator
{
    /**
     * @param int $number
     *
     * @return int
     */
    public function getFibonacci(int $number): int
    {
        return round((((sqrt(5) + 1) / 2) ** $number) / sqrt(5));
    }
}
