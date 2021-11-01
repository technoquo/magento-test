<?php

namespace Training\MyApi\Api;

interface TestActionManagementInterface
{

    /**
     * GET for testaction api
     * @param string $params
     * @return string
     */
    public function testaction($params);
}