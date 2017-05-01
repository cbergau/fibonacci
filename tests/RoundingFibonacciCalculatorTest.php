<?php

namespace Bergau;

class RoundingFibonacciCalculatorTest extends FibonacciTestCase
{
    public function getCalculator(): FibonacciCalculator
    {
        return new RoundingFibonacciCalculator();
    }
}
