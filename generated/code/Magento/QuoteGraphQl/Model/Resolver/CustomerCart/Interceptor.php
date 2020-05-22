<?php
namespace Magento\QuoteGraphQl\Model\Resolver\CustomerCart;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Resolver\CustomerCart
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Resolver\CustomerCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\CreateEmptyCartForCustomer $createEmptyCartForCustomer, \Magento\Quote\Api\CartManagementInterface $cartManagement, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory, \Magento\Quote\Model\ResourceModel\Quote\QuoteIdMask $quoteIdMaskResourceModel, \Magento\Quote\Model\QuoteIdToMaskedQuoteIdInterface $quoteIdToMaskedQuoteId)
    {
        $this->___init();
        parent::__construct($createEmptyCartForCustomer, $cartManagement, $quoteIdMaskFactory, $quoteIdMaskResourceModel, $quoteIdToMaskedQuoteId);
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
