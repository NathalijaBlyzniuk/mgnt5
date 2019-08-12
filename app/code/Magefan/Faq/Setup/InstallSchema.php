<?php

namespace Magefan\Faq\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{
     public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
     {
         $installer = $setup;
         $installer->startSetup();

        /**
 * Create table 'magefan_faq'
 */
 $table = $installer->getConnection()->newTable(
     $installer->getTable('magefan_faq')
 )->addColumn(
     'faq_id',
     \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
     null,
     ['identity' => true, 'nullable' => false, 'primary' => true],
     'FAQ ID'
 )->addColumn(
     'question',
     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
     255,
     ['nullable' => true],
     'FAQ Question'
 )->addColumn(
     'answer',
     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
     '2M',
     ['nullable' => true],
     'FAQ Answer'
 )->addColumn(
     'product_sku',
     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
     255,
     ['nullable' => true],
     'FAQ Product Sku'	 
 )->addColumn(
     'status',
     \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
     null,
     ['nullable' => false, 'default' => '1'],
     'Status'
     )->addIndex(
     $installer->getIdxName('magefan_faq', ['faq_id']),
     ['faq_id']
)->setComment(
     'Magefan FAQ Table'
);
$installer->getConnection()->createTable($table);

        $installer->endSetup();
     }
}