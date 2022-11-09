<?php
 
namespace Akilesh\Uimodule\Block\Adminhtml\Edit;
 
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
 
class Savedata implements ButtonProviderInterface
 
{
 
    public function getButtonData()
 
    {
  
        return [
 
            'label' => __('Save'),
 
            'class' => 'save primary',
 
            'data_attribute' => [
 
                'mage-init' => ['button' => ['event' => 'save']],
 
                'form-role' => 'save',
 
            ],
 
            'sort_order' => 90,
 
        ];
 
    }
 
}