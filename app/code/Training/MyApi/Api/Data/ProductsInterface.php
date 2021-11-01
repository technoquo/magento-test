<?php
namespace Training\MyApi\Api\Data;

interface ProductsInterface {
    


	 /**
	 * 	
	 * @return int
	 */
	
	public function getId();


	 /**
	 * 	
	 * @return string
	 */
	
	public function getName();


    /**
	 * 	
	 * @return string
	 */
	
	public function getSku();



	/**
	 * 	
	 * @return int
	 */
	
	public function getPrice();


	/**
	 * 	
	 * @return int
	 */
	
	public function getStoreId();


	/**
	 * 	
	 * @return int
	 */
	
	public function getQuantity();



   
   
	 
}