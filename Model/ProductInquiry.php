<?php
/**
 * Copyright © NodeSolutions All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Nodesolutions\ProductInquiry\Model;

use Magento\Framework\Model\AbstractModel;
use Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterface;

class ProductInquiry extends AbstractModel implements ProductInquiryInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Nodesolutions\ProductInquiry\Model\ResourceModel\ProductInquiry::class);
    }

    /**
     * @inheritDoc
     */
    public function getProductinquiryId()
    {
        return $this->getData(self::PRODUCTINQUIRY_ID);
    }

    /**
     * @inheritDoc
     */
    public function setProductinquiryId($productinquiryId)
    {
        return $this->setData(self::PRODUCTINQUIRY_ID, $productinquiryId);
    }

    /**
     * @inheritDoc
     */
    public function getPrdName()
    {
        return $this->getData(self::PRD_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setPrdName($prdName)
    {
        return $this->setData(self::PRD_NAME, $prdName);
    }

    /**
     * @inheritDoc
     */
    public function getPrdUrl()
    {
        return $this->getData(self::PRD_URL);
    }

    /**
     * @inheritDoc
     */
    public function setPrdUrl($prdUrl)
    {
        return $this->setData(self::PRD_URL, $prdUrl);
    }

    /**
     * @inheritDoc
     */
    public function getCustName()
    {
        return $this->getData(self::CUST_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setCustName($custName)
    {
        return $this->setData(self::CUST_NAME, $custName);
    }

    /**
     * @inheritDoc
     */
    public function getCustEmail()
    {
        return $this->getData(self::CUST_EMAIL);
    }

    /**
     * @inheritDoc
     */
    public function setCustEmail($custEmail)
    {
        return $this->setData(self::CUST_EMAIL, $custEmail);
    }

    /**
     * @inheritDoc
     */
    public function getCustPhnNo()
    {
        return $this->getData(self::CUST_PHN_NO);
    }

    /**
     * @inheritDoc
     */
    public function setCustPhnNo($custPhnNo)
    {
        return $this->setData(self::CUST_PHN_NO, $custPhnNo);
    }

    /**
     * @inheritDoc
     */
    public function getCustMsg()
    {
        return $this->getData(self::CUST_MSG);
    }

    /**
     * @inheritDoc
     */
    public function setCustMsg($custMsg)
    {
        return $this->setData(self::CUST_MSG, $custMsg);
    }
}

