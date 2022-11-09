<?php
 
namespace Akilesh\Modulecrud\Controller\Save;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Akilesh\Modulecrud\Model\Car;
use Magento\Framework\App\ResponseInterface;
class Save extends \Magento\Framework\App\Action\Action
{
    private $carresourcemodel;
    private $car;
 
    public function __construct(Context $context,
    Car $car,
    \Akilesh\Modulecrud\Model\ResourceModel\Car $carresourcemodel)
    {
        $this->car = $car;
        $this->carresourcemodel = $carresourcemodel;
        parent::__construct($context);

    }
 
    public function execute()
    {
        // print_r('sdfsdf');
        // exit;
        // $resultPage = $this->_resultPageFactory->create();
        // return $resultPage;
      
        // try {
            $data = $this->getRequest()->getParams();
            // print_r($data);
            // exit;
            if ($data) {
                $carModel = $this->car;
               
                $carModel->setData($data);
                // $this->model->Save($carModel);
                $this->carresourcemodel->save($carModel);
                $this->messageManager->addSuccessMessage(__("Data Saved Successfully."));
            }
        // } catch (\Exception $e) {
        //     $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        // }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('modulecrud');
 
    }
}

