<?php
namespace Training\ModelDB\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.1.6', '<')) {
            $setup->startSetup();
            $data = [
                'name_movie'     => "Avatar",
                'director_movie' => "James Cameron",
               
            ];

            $table = $setup->getTable('training_movies');
            $setup->getConnection()->insert($table, $data);

            $setup->endSetup();
        }
    }
}