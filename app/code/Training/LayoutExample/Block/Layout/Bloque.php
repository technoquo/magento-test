<?php 
namespace Training\LayoutExample\Block\Layout;

use Magento\Framework\View\Element\Template;

class Bloque extends Template
{

      protected function _prepareLayout()
      {
         parent::_prepareLayout();
    
         $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
         if ($pageMainTitle) {
             $pageMainTitle->setPageTitle('Magento Developer Training');
         }

         return $this;

      }
      /**
       *  @return string
       */

      public function getSubTitle(): string  
      {
          return 'Learn Magento 2 Development';
      }

      public function getNodeHtml(): string 
      {
          return $this->getLayout()->createBlock(Note::class)->toHtml();
      }

}
