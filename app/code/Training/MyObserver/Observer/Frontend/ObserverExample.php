<?php
namespace Training\MyObserver\Observer\Frontend;
 
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
 
class ObserverExample implements ObserverInterface {
  
    protected $_logger;
    
    /**
    * @param \Psr\Log\LoggerInterface $_logger
    */
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_logger = $logger;
    }
 
    public function execute(
        Observer $observer
    ) {
        
        $product = $observer->getProduct();    
        // Comprobar métodos mágicos en Magento/Catalog/Model/Product       
        $nombre = $product->getName(); // nombre del producto
        $precio = $product->getPrice(); // precio del producto
        $categorias = $product->getCategoryIds(); // categorias del producto        
        $descuento = 5; // porcentaje de descuento a aplicar
        $categoria_descuento = '5'; // categoria a la que aplicamos un descuento
        
        
        // comprobamos que la categoria con descuento pertenezca al producto seleccionado
        if (in_array($categoria_descuento, $categorias, true)) {
            $precio_final = $precio-($precio*$descuento/100);
           
            $product->setPrice($precio_final);
        } else { $precio_final = $precio; }

        $logHandler = new \Monolog\Handler\RotatingFileHandler(BP . '/var/log/bananacrons.log');
        $this->_logger = new \Monolog\Logger('Bananacrons');
        $this->_logger->pushHandler($logHandler);       
        $this->_logger->addInfo(print_r(
        [
            'PRODUCTO' => $nombre ,      
            'CATEGORIAS PRODUCTO' => $categorias,
            'CATEGORIAS CON DESCUENTO' => $categoria_descuento,
            'PRECIO INICIAL' => floatval($precio),
            'PRECIO_FINAL' => floatval($precio_final)
        ], true));
      
       
      
    
    
       
    }
    
}