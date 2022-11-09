<?php
namespace Akilesh\Uimodule\Controller\Adminhtml\Grid;
use Magento\Framework\Controller\ResultFactory;
class Addrow extends \Magento\Backend\App\Action
{
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        //die(dscsdvsdv);
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}

