<?php
namespace Training\DispatchEventExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Index implements ActionInterface
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\View\Result\PageFactory $pageFactory
		/*Magento\Framework\Event\ManagerInterface $eventManager*/)
	{
		$this->_pageFactory = $pageFactory;
		//$this->_eventManager = $eventManager;
		
	}

	public function execute()
	{
		$page = $this->_pageFactory->create();
        $page->getConfig()->getTitle()->set('Dispatch Event Example');
	//	$this->_eventManager->dispatch('dispatch_event_example', ['page' => $page]);
		return $page;
	}
}
