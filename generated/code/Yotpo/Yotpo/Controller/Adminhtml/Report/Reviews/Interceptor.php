<?php
namespace Yotpo\Yotpo\Controller\Adminhtml\Report\Reviews;

/**
 * Interceptor class for @see \Yotpo\Yotpo\Controller\Adminhtml\Report\Reviews
 */
class Interceptor extends \Yotpo\Yotpo\Controller\Adminhtml\Report\Reviews implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Yotpo\Yotpo\Model\Config $yotpoConfig)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $yotpoConfig);
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
