<?php

namespace Learning\HelloWorld\Observer\Product;

class Change implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		
        $product = $observer->getProduct();
        $originalName = $product->getName();
        $modifiedName = $originalName . ' - Modified Name';
        $product->setName($modifiedName);
	}
}
