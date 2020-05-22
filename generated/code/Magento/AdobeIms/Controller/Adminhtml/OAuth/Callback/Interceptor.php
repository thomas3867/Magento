<?php
namespace Magento\AdobeIms\Controller\Adminhtml\OAuth\Callback;

/**
 * Interceptor class for @see \Magento\AdobeIms\Controller\Adminhtml\OAuth\Callback
 */
class Interceptor extends \Magento\AdobeIms\Controller\Adminhtml\OAuth\Callback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdobeImsApi\Api\UserProfileRepositoryInterface $userProfileRepository, \Magento\AdobeImsApi\Api\Data\UserProfileInterfaceFactory $userProfileFactory, \Magento\AdobeImsApi\Api\GetTokenInterface $getToken, \Psr\Log\LoggerInterface $logger, \Magento\AdobeImsApi\Api\GetImageInterface $getImage)
    {
        $this->___init();
        parent::__construct($context, $userProfileRepository, $userProfileFactory, $getToken, $logger, $getImage);
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
