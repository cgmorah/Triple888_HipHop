<?php
namespace Triple888\HipHop\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
class InstallSchema implements InstallSchemaInterface {
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $setup->startSetup();
        $table = $setup->getConnection()->newTable($setup->getTable('triple888_hiphop_count'))
            ->addColumn('sku', Table::TYPE_TEXT, 64, ['nullable' => false, 'primary' => true], 'Product SKU')
            ->addColumn('add_to_cart_count', Table::TYPE_INTEGER, null, ['nullable' => false, 'default' => '0'], 'Add to Cart Count')
            ->setComment('HipHop Product Add to Cart Count');
        $setup->getConnection()->createTable($table);
        $setup->endSetup();
    }
}