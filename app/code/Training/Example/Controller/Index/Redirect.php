<?php
namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Redirect implements ActionInterface
{
	protected $_redirectFactory;

	public function __construct(
		\Magento\Framework\Controller\Result\RedirectFactory $redirectFactory)
	{
		$this->_redirectFactory = $redirectFactory;
		//return parent::__construct($context);
	}

	public function execute()
	{
		return  $this->_redirectFactory->create()->setUrl('/example/index/page');
        
        
	}
}