<?php
namespace Dotdigitalgroup\Chat\Controller\Profile\Index;

/**
 * Interceptor class for @see \Dotdigitalgroup\Chat\Controller\Profile\Index
 */
class Interceptor extends \Dotdigitalgroup\Chat\Controller\Profile\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Dotdigitalgroup\Chat\Model\Profile\UpdateChatProfile $chatProfile)
    {
        $this->___init();
        parent::__construct($context, $chatProfile);
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
