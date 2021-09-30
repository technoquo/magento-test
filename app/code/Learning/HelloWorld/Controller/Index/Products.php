<?php
namespace Learning\HelloWorld\Controller\Index;

class Products extends \Magento\Framework\App\Action\Action
{
	
	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Los productos disponibles'));
		$this->_eventManager->dispatch('learning_helloworld_products', ['mp_text' => $textDisplay]);
	
		exit;
	}
}