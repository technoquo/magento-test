<?php
namespace Learning\HelloWorld\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
	/*protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		echo "Hello World";
		exit;
	}*/

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Learnin'));
		$this->_eventManager->dispatch('learning_helloworld_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}

