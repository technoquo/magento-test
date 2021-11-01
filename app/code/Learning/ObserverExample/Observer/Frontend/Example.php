<?php


use  Learning\ObserverExample\Observer\Frontend;




class Example implements ObserverInterface
{

    /**
     * @var logger
     */
    protected Logger $logger;
    /**
     * @param Looger $Logger
     * 
     */

    public function _construct(Logger $logger)
    {
        $this->looger = $looger;
    }

	public function execute(Observer $observer)
	{
		
		$this->logger->info('Evnento disparado en Frontend');
	}
}
