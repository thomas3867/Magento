<?php
namespace Magento\Widget\Controller\Adminhtml\Widget\Instance\MassDelete;

/**
 * Interceptor class for @see \Magento\Widget\Controller\Adminhtml\Widget\Instance\MassDelete
 */
class Interceptor extends \Magento\Widget\Controller\Adminhtml\Widget\Instance\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Widget\Model\DeleteWidgetById $deleteWidgetById)
    {
        $this->___init();
        parent::__construct($context, $deleteWidgetById);
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
