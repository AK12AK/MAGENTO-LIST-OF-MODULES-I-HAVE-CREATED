<?php

namespace Akilesh\Uimodule\Controller\Adminhtml\Grid;

class Index extends \Magento\Backend\App\Action
{

    protected $_resultPageFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) 
    {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Akilesh_Uimodule::grid_list');
        $resultPage->getConfig()->getTitle()->prepend(__('Task using UI component'));

        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Akilesh_Uimodule::grid_list');
    }
}