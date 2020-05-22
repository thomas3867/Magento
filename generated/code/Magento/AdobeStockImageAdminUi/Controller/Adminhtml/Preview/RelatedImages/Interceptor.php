<?php
namespace Magento\AdobeStockImageAdminUi\Controller\Adminhtml\Preview\RelatedImages;

/**
 * Interceptor class for @see \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\Preview\RelatedImages
 */
class Interceptor extends \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\Preview\RelatedImages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdobeStockImageApi\Api\GetRelatedImagesInterface $getRelatedImages, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $getRelatedImages, $logger);
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
