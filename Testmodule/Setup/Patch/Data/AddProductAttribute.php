<?php
namespace Akilesh\Testmodule\Setup\Patch\Data;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddProductAttribute implements DataPatchInterface
{
   private $_moduleDataSetup;

   private $_eavSetupFactory;

   public function __construct(
       ModuleDataSetupInterface $moduleDataSetup,
       EavSetupFactory $eavSetupFactory
   ) {
       $this->_moduleDataSetup = $moduleDataSetup;
       $this->_eavSetupFactory = $eavSetupFactory;
   }

   public function apply()
   {
       /** @var EavSetup $eavSetup */
       $eavSetup = $this->_eavSetupFactory->create(['setup' => $this->_moduleDataSetup]);

       $eavSetup->addAttribute(\Magento\Catalog\Model\Product::ENTITY, 'custom_datapatch', [
        //    'type' => 'int',
        //    'backend' => '',
        //    'frontend' => '',
        //    'label' => 'Enable Custom Data Patch',
        //    'input' => 'select',
        //    'class' => 'custom_datapatch_class',
        //    'source' => \Magento\Catalog\Model\Product\Attribute\Source\Boolean::class,
        //    'global' => 9\Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
        //    'visible' => true,
        //    'required' => true,
        //    'user_defined' => false,
        //    'default' => '',
        //    'searchable' => false,
        //    'filterable' => false,
        //    'comparable' => false,
        //    'visible_on_front' => false,
        //    'used_in_product_listing' => true,
        //    'unique' => false,

                    'label' => 'Sample Product data',
                    'required' => 0,
                    'position' => 100,
                    'system' => 0,
                    'user_defined' => 1,
                    'is_used_in_grid' => 1,
                    'is_visible_in_grid' => 1,
                    'is_filterable_in_grid' => 1,
                    'is_searchable_in_grid' => 1,
                
       ]);
   }

   public static function getDependencies()
   {
       return [];
   }

   public function getAliases()
   {
       return [];
   }

   public static function getVersion()
   {
      return '1.0.0';
   }
}