<?php
namespace Magento\WishlistGraphQl\Model\Resolver\CustomerWishlistResolver;

/**
 * Interceptor class for @see \Magento\WishlistGraphQl\Model\Resolver\CustomerWishlistResolver
 */
class Interceptor extends \Magento\WishlistGraphQl\Model\Resolver\CustomerWishlistResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\WishlistFactory $wishlistFactory)
    {
        $this->___init();
        parent::__construct($wishlistFactory);
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
