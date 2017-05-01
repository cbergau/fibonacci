<?php

namespace Bergau;

class RecursiveFibonacciCalculatorTest extends FibonacciTestCase
{
    public function getCalculator(): FibonacciCalculator
    {
        return new RecursiveFibonacciCalculator();
    }
}
