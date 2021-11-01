<?php
namespace Training\Car\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
     /**
 * {@inheritdoc}
 */
	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		$installer = $setup;

		$installer->startSetup();

		if(version_compare($context->getVersion(), '1.1.0', '<')) {
			if (!$installer->tableExists('my_cars')) {
                $table = $installer->getConnection()->newTable(
                    $installer->getTable('my_cars')
                )
                    ->addColumn(
                        'car_id',
                        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                        null,
                        [
                            'identity' => true,
                            'nullable' => false,
                            'primary'  => true,
                            'unsigned' => true,
                        ],
                        'Car ID'
                    )
                    ->addColumn(
                        'marca',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        ['nullable => false'],
                        'Nombre Marca'
                    )
                    ->addColumn(
                        'modelo',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        [],
                        'Modelo'
                    )
                  ->addColumn(
                        'ano',
                        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                        4,
                        [],
                        'Ano'
                    )				
                    ->setComment('Post Table');
                $installer->getConnection()->createTable($table);
    
                $installer->getConnection()->addIndex(
                    $installer->getTable('my_cars'),
                    $setup->getIdxName(
                        $installer->getTable('my_cars'),
                        ['marca','modelo','ano'],
                        \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                    ),
                    ['marca','modelo','ano'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                );
			}
		}

		$installer->endSetup();
	}
}
