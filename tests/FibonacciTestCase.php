<?php

namespace Bergau;

use PHPUnit\Framework\TestCase;

abstract class FibonacciTestCase extends TestCase
{
    /**
     * @return int[]
     */
    public function provider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [2, 1],
            [3, 2],
            [4, 3],
            [5, 5],
            [6, 8],
            [7, 13],
            [8, 21],
            [9, 34],
            [10, 55],
            [11, 89],
            [12, 144],
            [13, 233],
            [14, 377],
            [15, 610],
            [16, 987],
            [17, 1597],
            [18, 2584],
            [19, 4181],
            [20, 6765],
        ];
    }

    /**
     * @dataProvider provider
     *
     * @param int $number
     * @param int $fibonacci
     */
    public function testCalculate(int $number, int $fibonacci)
    {
        $calculator = $this->getCalculator();
        $this->assertSame($fibonacci, $calculator->getFibonacci($number));
    }

    abstract public function getCalculator(): FibonacciCalculator;
}