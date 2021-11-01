<?php
namespace Learning\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'learning_helloworld_post';

	protected $_cacheTag = 'learning_helloworld_post';

	protected $_eventPrefix = 'learning_helloworld_post';

	protected function _construct()
	{
		$this->_init('learning\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
