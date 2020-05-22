<?php
namespace Magento\GoogleShoppingAds\Controller\Adminhtml\Index\MagentoGatewayCallback;

/**
 * Interceptor class for @see \Magento\GoogleShoppingAds\Controller\Adminhtml\Index\MagentoGatewayCallback
 */
class Interceptor extends \Magento\GoogleShoppingAds\Controller\Adminhtml\Index\MagentoGatewayCallback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Config\Storage\WriterInterface $writer, \Magento\Framework\App\Config\ReinitableConfigInterface $reinitableConfig)
    {
        $this->___init();
        parent::__construct($context, $writer, $reinitableConfig);
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
