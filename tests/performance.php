<?php

require_once __DIR__ . '/../vendor/autoload.php';

$timer = new \Bergau\Timer();
$fibonacciTo = 32;

$calculator = new \Bergau\RecursiveFibonacciCalculator();

$timer->start();
for ($i = 0; $i <= $fibonacciTo; $i++) {
    $calculator->getFibonacci($i);
}
$timer->stop();

echo "Time for recursive method: {$timer->getTime()} ms\n";

$calculator = new \Bergau\RoundingFibonacciCalculator();

$timer->start();
for ($i = 0; $i <= $fibonacciTo; $i++) {
    $calculator->getFibonacci($i);
}
$timer->stop();

echo "Time for rounding method: {$timer->getTime()} seconds\n";
