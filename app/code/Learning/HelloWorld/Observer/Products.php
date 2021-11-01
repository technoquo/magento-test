<?php

namespace Learning\HelloWorld\Observer;

class Products implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		 
		
		$displayText = $observer->getData('mp_text');
		echo $displayText->getText() . "  son </br> </br>";
      
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$productCollection = $objectManager->create('Magento\Catalog\Model\ResourceModel\Product\Collection');
		$collection = $productCollection->addAttributeToSelect('*')->load();
		foreach ($collection as $product){
         if ($product->getId() == 9){
          
        

			$originalprice = $product->getPrice();
            $customprice = $originalprice+ 60;
            $product->setPrice($customprice);
            $product->setCustomPrice($customprice);
            $product->setOriginalCustomPrice($customprice);
            $product->setFinalPrice($customprice);
			
		
		 }
	
			echo $product->getId().' - '.$product->getName().'- $' . number_format($product->getPrice(), 2, ".", ",")   .'<br>';
		} 
		
		

		return $this;
		

		
	}
}
