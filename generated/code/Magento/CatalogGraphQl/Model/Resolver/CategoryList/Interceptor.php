<?php
namespace Magento\CatalogGraphQl\Model\Resolver\CategoryList;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\CategoryList
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\CategoryList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree $categoryTree, \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\ExtractDataFromCategoryTree $extractDataFromCategoryTree, \Magento\CatalogGraphQl\Model\Category\CategoryFilter $categoryFilter, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($categoryTree, $extractDataFromCategoryTree, $categoryFilter, $collectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        if (!$pluginInfo) {
            return parent::resolve($field, $context, $info, $value, $args);
        } else {
            return $this->___callPlugins('resolve', func_get_args(), $pluginInfo);
        }
    }
}
