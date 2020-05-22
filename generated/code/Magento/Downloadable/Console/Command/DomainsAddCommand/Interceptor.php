<?php
namespace Magento\Downloadable\Console\Command\DomainsAddCommand;

/**
 * Interceptor class for @see \Magento\Downloadable\Console\Command\DomainsAddCommand
 */
class Interceptor extends \Magento\Downloadable\Console\Command\DomainsAddCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Downloadable\Api\DomainManagerInterface $domainManager)
    {
        $this->___init();
        parent::__construct($domainManager);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        if (!$pluginInfo) {
            return parent::run($input, $output);
        } else {
            return $this->___callPlugins('run', func_get_args(), $pluginInfo);
        }
    }
}
