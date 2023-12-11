<?php
/**
 * Copyright © Nodesolutions All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Nodesolutions\ProductInquiry\Controller\Adminhtml\ProductInquiry;

class Delete extends \Nodesolutions\ProductInquiry\Controller\Adminhtml\ProductInquiry
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('productinquiry_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create(\Nodesolutions\ProductInquiry\Model\ProductInquiry::class);
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Productinquiry.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['productinquiry_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Productinquiry to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}

