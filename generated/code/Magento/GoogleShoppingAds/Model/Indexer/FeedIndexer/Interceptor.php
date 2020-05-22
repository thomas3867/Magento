<?php
namespace Magento\GoogleShoppingAds\Model\Indexer\FeedIndexer;

/**
 * Interceptor class for @see \Magento\GoogleShoppingAds\Model\Indexer\FeedIndexer
 */
class Interceptor extends \Magento\GoogleShoppingAds\Model\Indexer\FeedIndexer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($productRetrievers, \Magento\GoogleShoppingAds\Model\Indexer\RemoveIndexer\RemoveRetriever $removeRetriever, \Magento\GoogleShoppingAds\Model\ServiceDataRetriever $serviceDataRetriever, \Psr\Log\LoggerInterface $logger, \Magento\GoogleShoppingAds\Model\Indexer\FeedSender $feedSender)
    {
        $this->___init();
        parent::__construct($productRetrievers, $removeRetriever, $serviceDataRetriever, $logger, $feedSender);
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
