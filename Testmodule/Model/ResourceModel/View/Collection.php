<?php
namespace Akilesh\Testmodule\Model\ResourceModel\View;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Akilesh\Testmodule\Model\View::class, \Akilesh\Testmodule\Model\ResourceModel\View::class);
    }
}