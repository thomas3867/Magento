<?php
namespace Magento\Cms\Model\PageRepository\ValidationComposite;

/**
 * Interceptor class for @see \Magento\Cms\Model\PageRepository\ValidationComposite
 */
class Interceptor extends \Magento\Cms\Model\PageRepository\ValidationComposite implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Api\PageRepositoryInterface $repository, array $validators = [])
    {
        $this->___init();
        parent::__construct($repository, $validators);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Cms\Api\Data\PageInterface $page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($page);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }
}
