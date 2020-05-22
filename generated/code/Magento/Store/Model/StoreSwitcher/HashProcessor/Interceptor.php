<?php
namespace Magento\Store\Model\StoreSwitcher\HashProcessor;

/**
 * Interceptor class for @see \Magento\Store\Model\StoreSwitcher\HashProcessor
 */
class Interceptor extends \Magento\Store\Model\StoreSwitcher\HashProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreSwitcher\HashGenerator $hashGenerator, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Customer\Model\ResourceModel\CustomerRepository $customerRepository, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($hashGenerator, $request, $messageManager, $customerRepository, $customerSession);
    }

    /**
     * {@inheritdoc}
     */
    public function switch(\Magento\Store\Api\Data\StoreInterface $fromStore, \Magento\Store\Api\Data\StoreInterface $targetStore, string $redirectUrl) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'switch');
        if (!$pluginInfo) {
            return parent::switch($fromStore, $targetStore, $redirectUrl);
        } else {
            return $this->___callPlugins('switch', func_get_args(), $pluginInfo);
        }
    }
}
