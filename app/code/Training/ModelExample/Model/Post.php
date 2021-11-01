<?php
namespace Training\ModelExample\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'training_modelexample_post';

	protected $_cacheTag = 'training_modelexample_post';

	protected $_eventPrefix = 'training_modelexample_post';

	protected function _construct()
	{
		$this->_init('Training\ModelExample\Model\ResourceModel\Post');
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
