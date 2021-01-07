<?php
namespace App\JsonRpc;

/**
 * Interface MathServiceInterface
 * @package App\JsonRpc
 */
interface MathServiceInterface
{
    public function plus(int $a, int $b): int;
}