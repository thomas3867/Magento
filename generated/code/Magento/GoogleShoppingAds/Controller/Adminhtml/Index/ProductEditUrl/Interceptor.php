<?php
namespace Magento\GoogleShoppingAds\Controller\Adminhtml\Index\ProductEditUrl;

/**
 * Interceptor class for @see \Magento\GoogleShoppingAds\Controller\Adminhtml\Index\ProductEditUrl
 */
class Interceptor extends \Magento\GoogleShoppingAds\Controller\Adminhtml\Index\ProductEditUrl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\GoogleShoppingAds\Model\ProductEditUrlRetriever $productEditUrlRetriever)
    {
        $this->___init();
        parent::__construct($context, $productEditUrlRetriever);
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
