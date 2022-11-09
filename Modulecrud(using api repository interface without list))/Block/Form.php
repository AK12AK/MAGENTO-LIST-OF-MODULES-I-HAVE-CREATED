<?php
namespace Akilesh\Modulecrud\Block;
 
use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Akilesh\Modulecrud\Model\ResourceModel\Model\Collection;
class Form extends Template
{

    private $collection;
    public function __construct(Context $context,  Collection $collection, array $data = [])
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }
     public function getalldata()
     {
        return $this->collection;
     }
    public function getAddCarPostUrl() {

        return $this->getUrl('modulecrud/index/save');
    }
}

