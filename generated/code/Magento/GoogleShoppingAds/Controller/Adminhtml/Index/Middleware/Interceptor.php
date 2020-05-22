<?php
namespace Magento\GoogleShoppingAds\Controller\Adminhtml\Index\Middleware;

/**
 * Interceptor class for @see \Magento\GoogleShoppingAds\Controller\Adminhtml\Index\Middleware
 */
class Interceptor extends \Magento\GoogleShoppingAds\Controller\Adminhtml\Index\Middleware implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\GoogleShoppingAds\Model\ServiceClient $serviceClient, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->___init();
        parent::__construct($context, $serviceClient, $resultJsonFactory);
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
