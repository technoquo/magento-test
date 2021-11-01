<?php

namespace Training\MyApi\Model;
use \Training\MyApi\Api\MisProductostInterface;


class ProductosManagement  implements MisProductostInterface
{
    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;
    }

    public function getList()
{
   	
     return $this->collectionFactory->create()->getItems();
 
  }
}
