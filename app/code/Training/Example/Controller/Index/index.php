<?php
namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Index implements ActionInterface
{
    /**
     * @var RawFactory
     */
   
  protected $resultFactory;


  /**
   * @param RawFactory $resultFactory
   */
    public function __construct(RawFactory $resultFactory) {
       
        $this->resultFactory = $resultFactory;
    }

	public function execute()
	{
        
		return $this->resultFactory->create()->setContents('Example--');
        //die('Example');
        /*return $this->resultFactory->create()
        ->setHeader('Content-Type','text/xml')
        ->setContents('<root><name>Leonel Lopez</name><job>Magento Developer Training</job></root>');*/
	}
}