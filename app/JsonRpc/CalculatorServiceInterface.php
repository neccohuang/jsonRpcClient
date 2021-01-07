<?php
namespace App\JsonRpc;

/**
 * Interface CalculatorServiceInterface
 * @package App\JsonRpc
 */
interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;
}