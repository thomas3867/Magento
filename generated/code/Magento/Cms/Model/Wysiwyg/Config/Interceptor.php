<?php
namespace Magento\Cms\Model\Wysiwyg\Config;

/**
 * Interceptor class for @see \Magento\Cms\Model\Wysiwyg\Config
 */
class Interceptor extends \Magento\Cms\Model\Wysiwyg\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Model\UrlInterface $backendUrl, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\AuthorizationInterface $authorization, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Variable\Model\Variable\Config $variableConfig, \Magento\Widget\Model\Widget\Config $widgetConfig, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Filesystem $filesystem, array $windowSize = [], array $data = [], ?\Magento\Cms\Model\Wysiwyg\CompositeConfigProvider $configProvider = null)
    {
        $this->___init();
        parent::__construct($backendUrl, $eventManager, $authorization, $assetRepo, $variableConfig, $widgetConfig, $scopeConfig, $storeManager, $filesystem, $windowSize, $data, $configProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig($data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfig');
        if (!$pluginInfo) {
            return parent::getConfig($data);
        } else {
            return $this->___callPlugins('getConfig', func_get_args(), $pluginInfo);
        }
    }
}
