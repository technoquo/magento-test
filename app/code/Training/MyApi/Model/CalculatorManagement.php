<?php

//Path: Training/Blog/Model/CalculatorManagement.php

namespace Training\MyApi\Model;

class CalculatorManagement implements \Training\MyApi\Api\CalculatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function add($num1, $num2)
    {
        //TODO
        return $num1 + $num2;
    }
}