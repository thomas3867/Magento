<?php
namespace Magento\AdobeStockImageAdminUi\Controller\Adminhtml\Preview\Download;

/**
 * Interceptor class for @see \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\Preview\Download
 */
class Interceptor extends \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\Preview\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdobeStockImageApi\Api\SaveImageInterface $saveImage, \Psr\Log\LoggerInterface $logger, \Magento\AdobeStockAssetApi\Api\GetAssetByIdInterface $getAssetById)
    {
        $this->___init();
        parent::__construct($context, $saveImage, $logger, $getAssetById);
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
