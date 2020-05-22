<?php
namespace Magento\Ui\Component\Wysiwyg\Config;

/**
 * Interceptor class for @see \Magento\Ui\Component\Wysiwyg\Config
 */
class Interceptor extends \Magento\Ui\Component\Wysiwyg\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfig');
        if (!$pluginInfo) {
            return parent::getConfig();
        } else {
            return $this->___callPlugins('getConfig', func_get_args(), $pluginInfo);
        }
    }
}
