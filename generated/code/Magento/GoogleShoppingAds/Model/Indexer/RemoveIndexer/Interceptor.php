<?php
namespace Magento\GoogleShoppingAds\Model\Indexer\RemoveIndexer;

/**
 * Interceptor class for @see \Magento\GoogleShoppingAds\Model\Indexer\RemoveIndexer
 */
class Interceptor extends \Magento\GoogleShoppingAds\Model\Indexer\RemoveIndexer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GoogleShoppingAds\Model\ServiceDataRetriever $serviceDataRetriever, \Psr\Log\LoggerInterface $logger, \Magento\GoogleShoppingAds\Model\ServiceClient $serviceClient, \Magento\GoogleShoppingAds\Model\Indexer\RemoveIndexer\RemoveRetriever $removeRetriever, \Magento\GoogleShoppingAds\Model\Indexer\ProductCacheRemover $productCacheRemover)
    {
        $this->___init();
        parent::__construct($serviceDataRetriever, $logger, $serviceClient, $removeRetriever, $productCacheRemover);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        if (!$pluginInfo) {
            return parent::executeFull();
        } else {
            return $this->___callPlugins('executeFull', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        if (!$pluginInfo) {
            return parent::executeList($ids);
        } else {
            return $this->___callPlugins('executeList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        if (!$pluginInfo) {
            return parent::executeRow($id);
        } else {
            return $this->___callPlugins('executeRow', func_get_args(), $pluginInfo);
        }
    }
}
