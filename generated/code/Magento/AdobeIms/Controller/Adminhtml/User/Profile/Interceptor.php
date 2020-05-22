<?php
namespace Magento\AdobeIms\Controller\Adminhtml\User\Profile;

/**
 * Interceptor class for @see \Magento\AdobeIms\Controller\Adminhtml\User\Profile
 */
class Interceptor extends \Magento\AdobeIms\Controller\Adminhtml\User\Profile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Authorization\Model\UserContextInterface $userContext, \Magento\AdobeImsApi\Api\UserProfileRepositoryInterface $userProfileRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $userContext, $userProfileRepository, $logger);
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
