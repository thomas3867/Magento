<?php
namespace Magento\Framework\DB\Adapter\Pdo\Mysql;

/**
 * Interceptor class for @see \Magento\Framework\DB\Adapter\Pdo\Mysql
 */
class Interceptor extends \Magento\Framework\DB\Adapter\Pdo\Mysql implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Framework\DB\LoggerInterface $logger, \Magento\Framework\DB\SelectFactory $selectFactory, array $config = [], ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($string, $dateTime, $logger, $selectFactory, $config, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'commit');
        if (!$pluginInfo) {
            return parent::commit();
        } else {
            return $this->___callPlugins('commit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rollBack');
        if (!$pluginInfo) {
            return parent::rollBack();
        } else {
            return $this->___callPlugins('rollBack', func_get_args(), $pluginInfo);
        }
    }
}
