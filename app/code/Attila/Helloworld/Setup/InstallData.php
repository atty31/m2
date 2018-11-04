<?php
namespace Attila\Helloworld\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;


class InstallData implements InstallDataInterface
{
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->getConnection()->insert(
            $setup->getTable('attila_helloworld'),
            [
                'name'=>'Item 1',
                'date'=>'2018-11-04 19:00:00'
            ]
        );
        $setup->getConnection()->insert(
            $setup->getTable('attila_helloworld'),
            [
                'name'=>'Item 2',
                'date'=>'2018-11-04 19:00:01'
            ]
        );
        $setup->getConnection()->insert(
            $setup->getTable('attila_helloworld'),
            [
                'name'=>'Item 3',
                'date'=>'2018-11-04 19:00:02'
            ]
        );
        $setup->endSetup();
    }
}