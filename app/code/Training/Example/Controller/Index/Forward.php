<?php
namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Forward implements ActionInterface
{
	protected $_forwardFactory;

	public function __construct(
		\Magento\Framework\Controller\Result\ForwardFactory $fowardFactory)
	{
		$this->_forwardFactory = $fowardFactory;
		//return parent::__construct($context);
	}

	public function execute()
	{
		return  $this->_forwardFactory->create()->forward('page');
        
        
	}
}