<?php
namespace Nodesolutions\ProductInquiry\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Nodesolutions\ProductInquiry\Model\ProductInquiryFactory;

class Details extends Action
{
    protected $resultPageFactory;
    protected $productInquiryFactory;
    public function __construct(Context $context, ProductInquiryFactory $productInquiryFactory, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->productInquiryFactory = $productInquiryFactory;
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $model = $this->productInquiryFactory->create();
        $model->setData($data);
        if($model->save()){
            $this->messageManager->addSuccessMessage(__('Your request has been saved. We will contact you soon.'));
        }else{
            $this->messageManager->addErrorMessage(__('Error processing your request, Please try again.'));
        }

    }
}
