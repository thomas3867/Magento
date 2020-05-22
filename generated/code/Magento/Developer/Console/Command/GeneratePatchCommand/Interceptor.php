<?php
namespace Magento\Developer\Console\Command\GeneratePatchCommand;

/**
 * Interceptor class for @see \Magento\Developer\Console\Command\GeneratePatchCommand
 */
class Interceptor extends \Magento\Developer\Console\Command\GeneratePatchCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Component\ComponentRegistrar $componentRegistrar, ?\Magento\Framework\Filesystem\DirectoryList $directoryList = null, ?\Magento\Framework\Filesystem\Directory\ReadFactory $readFactory = null, ?\Magento\Framework\Filesystem\Directory\WriteFactory $writeFactory = null)
    {
        $this->___init();
        parent::__construct($componentRegistrar, $directoryList, $readFactory, $writeFactory);
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
