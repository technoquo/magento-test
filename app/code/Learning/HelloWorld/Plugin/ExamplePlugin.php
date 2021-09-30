<?php

namespace Learning\HelloWorld\Plugin;

class ExamplePlugin
{ 



	public function beforeSetTitle(\Learning\HelloWorld\Controller\Index\Example $subject, $title)
	{
		$title = $title . " al ";
		echo 'A) '.  __METHOD__ . "</br>";       
		return [$title];
	}


	public function afterGetTitle(\Learning\HelloWorld\Controller\Index\Example $subject, $result)
	{

		echo 'D) '. __METHOD__ . "</br>";

		return '<h1>'. $result . 'dev.magento.com' .'</h1>';

	}


	public function aroundGetTitle(\Learning\HelloWorld\Controller\Index\Example $subject, callable $proceed)
	{

		echo 'B) '.__METHOD__ . " - Before proceed() </br>";
		 $result = $proceed();
		echo 'C) '.__METHOD__ . " - After proceed() </br>";


		return $result;
	}

}

