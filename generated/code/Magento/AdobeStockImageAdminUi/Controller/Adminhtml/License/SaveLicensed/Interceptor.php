<?php
namespace Magento\AdobeStockImageAdminUi\Controller\Adminhtml\License\SaveLicensed;

/**
 * Interceptor class for @see \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\License\SaveLicensed
 */
class Interceptor extends \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\License\SaveLicensed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdobeStockImageApi\Api\SaveLicensedImageInterface $saveLicensedImage, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $saveLicensedImage, $logger);
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
