<?php

namespace Akilesh\Modulecrud\Model;

use Magento\Framework\Model\AbstractModel;
use Akilesh\Modulecrud\Model\ResourceModel\Car as ResourceModel;

class Car extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}   