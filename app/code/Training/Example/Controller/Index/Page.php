<?php
namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Page implements ActionInterface
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		//return parent::__construct($context);
	}

	public function execute()
	{
		$page = $this->_pageFactory->create();
        $page->getConfig() ->getTitle()->set('Example');
        return $page;
	}
}