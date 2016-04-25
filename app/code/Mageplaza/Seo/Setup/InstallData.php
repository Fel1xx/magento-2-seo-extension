<?php

namespace Mageplaza\Seo\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }
//    public function getRobotsEntities()
//    {
//        return [
//            'catalog_category' => [
//                'entity_model' => 'Magento\Catalog\Model\ResourceModel\Category',
//                'attribute_model' => 'Magento\Catalog\Model\ResourceModel\Eav\Attribute',
//                'table' => 'catalog_category_entity',
//                'additional_attribute_table' => 'catalog_eav_attribute',
//                'entity_attribute_collection' => 'Magento\Catalog\Model\ResourceModel\Category\Attribute\Collection',
//                'attributes' => [
//                    'meta_robot' => [
//                        'type' => 'varchar',
//                        'label' => 'Meta Robots',
//                        'input' => 'select',
//                        'required' => false,
//                        'sort_order' => 50,
//                        'source' => 'Mageplaza\Seo\Model\Source\Robots',
//                        'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
//                        'group' => 'Meta Information',
//                        'is_used_in_grid' => false,
//                        'is_visible_in_grid' => false,
//                        'is_filterable_in_grid' => false,
//                    ],
//
//                ],
//            ]
//        ];
//    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'meta_robots',
            [
                'type' => 'varchar',
                'label' => 'Meta Robots',
                'input' => 'select',
                'required' => false,
                'sort_order' => 50,
                'source' => 'Mageplaza\Seo\Model\Source\Robots',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                'group' => 'Search Engine Optimization',
                'is_used_in_grid' => false,
                'is_visible_in_grid' => false,
                'is_filterable_in_grid' => false,
            ]
        );
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Category::ENTITY,
            'meta_robots',
            [
                'type' => 'varchar',
                'label' => 'Meta Robots',
                'input' => 'select',
                'required' => false,
                'sort_order' => 50,
                'source' => 'Mageplaza\Seo\Model\Source\Robots',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                'group' => 'General Information',
                'is_used_in_grid' => false,
                'is_visible_in_grid' => false,
                'is_filterable_in_grid' => false,
            ]
        );
        $installer = $setup;

        $installer->startSetup();

        $installer->endSetup();
    }
}