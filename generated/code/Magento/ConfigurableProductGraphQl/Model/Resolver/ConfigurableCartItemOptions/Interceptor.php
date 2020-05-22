<?php
namespace Magento\ConfigurableProductGraphQl\Model\Resolver\ConfigurableCartItemOptions;

/**
 * Interceptor class for @see \Magento\ConfigurableProductGraphQl\Model\Resolver\ConfigurableCartItemOptions
 */
class Interceptor extends \Magento\ConfigurableProductGraphQl\Model\Resolver\ConfigurableCartItemOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Helper\Product\Configuration $configurationHelper)
    {
        $this->___init();
        parent::__construct($configurationHelper);
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
