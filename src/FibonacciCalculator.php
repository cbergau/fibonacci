<?php

namespace Bergau;

interface FibonacciCalculator
{
    /**
     * @param int $number
     *
     * @return int
     */
    public function getFibonacci(int $number): int;
}
