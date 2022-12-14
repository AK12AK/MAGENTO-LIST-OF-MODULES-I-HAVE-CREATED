<?php

namespace Akilesh\Uimodule\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init('Akilesh\Uimodule\Model\Grid', 'Akilesh\Uimodule\Model\ResourceModel\Grid');
    }
}