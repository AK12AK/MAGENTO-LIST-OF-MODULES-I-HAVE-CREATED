<?php
namespace Akilesh\Modulecrud\Model\ResourceModel\Car;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Akilesh\Modulecrud\Model\Car as Model;
use Akilesh\Modulecrud\Model\ResourceModel\Car as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}