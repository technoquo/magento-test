<?php

namespace Training\Car\Model;

use Magento\Framework\Model\AbstractModel;
use Training\Car\Model\ResourceModel\Car as ResourceModel;

class Car extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}