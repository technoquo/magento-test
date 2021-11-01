<?php
namespace Training\ModelDB\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
	
	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		

		$installer = $setup;

		$installer->startSetup();

	if (version_compare($context->getVersion(), '1.0.4') < 0) {
		
			if (!$installer->tableExists('training_movies')) {
				$table = $installer->getConnection()->newTable(
					$installer->getTable('training_movies')
				)
				->addColumn(
					'movie_id',
					\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
					null,
					[
						'identity' => true,
						'nullable' => false,
						'primary'  => true,
						'unsigned' => true,
					],
					'Moviedd ID'
				)
				->addColumn(
					'name_movie',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable => false'],
					'Moviedd Name'
				)
				->addColumn(
					'director_movie',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable => false'],
					'Director movie'
				)				
				->setComment('Movie Table');
				$installer->getConnection()->createTable($table);

				$installer->getConnection()->addIndex(
					$installer->getTable('training_movies'),
					$setup->getIdxName(
						$installer->getTable('training_movies'),
						['name_movie'],
						\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
					),
					['name_movie'],
					\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
				);
			}
		}

		$installer->endSetup();
	}
}