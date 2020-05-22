<?php
namespace Magento\Catalog\Model\Product\Attribute\OptionManagement;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Attribute\OptionManagement
 */
class Interceptor extends \Magento\Catalog\Model\Product\Attribute\OptionManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Api\AttributeOptionManagementInterface $eavOptionManagement)
    {
        $this->___init();
        parent::__construct($eavOptionManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function add($attributeCode, $option)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'add');
        if (!$pluginInfo) {
            return parent::add($attributeCode, $option);
        } else {
            return $this->___callPlugins('add', func_get_args(), $pluginInfo);
        }
    }
}
