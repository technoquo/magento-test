<?php
namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Json implements ActionInterface
{
	protected $_jsonFactory;

	public function __construct(
		\Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
	{
		$this->_jsonFactory = $jsonFactory;
		//return parent::__construct($context);
	}

	public function execute()
	{
		return  $this->_jsonFactory->create()
        ->setHeader('Content-Type','application/json')
        ->setData([
            'name' => 'Leonel Lopez',
            'Job'  => 'Magento Developer Training'
        ]);
        
        
	}
}