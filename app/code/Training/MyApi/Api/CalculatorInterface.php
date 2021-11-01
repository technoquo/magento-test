<?php

namespace Training\MyApi\Api;

interface CalculatorInterface
{
    /**
     * Add two numbers.
     *
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function add($num1, $num2);
}

?>