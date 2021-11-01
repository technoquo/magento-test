<?php

//Path: Training/Blog/Model/TestActionManagement.php

namespace Training\MyApi\Model;

class TestActionManagement implements \Training\MyApi\Api\TestActionManagementInterface
{
    /**
     * {@inheritdoc}
     */
    public function testaction($param)
    {
        //TODO
        return $param * 0.1;
    }
}