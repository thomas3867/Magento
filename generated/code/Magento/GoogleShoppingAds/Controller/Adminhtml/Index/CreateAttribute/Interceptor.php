<?php
namespace Magento\GoogleShoppingAds\Controller\Adminhtml\Index\CreateAttribute;

/**
 * Interceptor class for @see \Magento\GoogleShoppingAds\Controller\Adminhtml\Index\CreateAttribute
 */
class Interceptor extends \Magento\GoogleShoppingAds\Controller\Adminhtml\Index\CreateAttribute implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Webapi\ServiceInputProcessor $serviceInputProcessor, \Magento\GoogleShoppingAds\Model\AttributeCreator $attributeCreator)
    {
        $this->___init();
        parent::__construct($context, $serviceInputProcessor, $attributeCreator);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
