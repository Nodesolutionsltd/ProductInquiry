<?php
/**
 * Copyright © Nodesolutions All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Nodesolutions\ProductInquiry\Api\Data;

interface ProductInquiryInterface
{

    const CUST_EMAIL = 'cust_email';
    const CUST_PHN_NO = 'cust_phn_no';
    const PRD_NAME = 'prd_name';
    const CUST_NAME = 'cust_name';
    const PRD_URL = 'prd_url';
    const CUST_MSG = 'cust_msg';
    const PRODUCTINQUIRY_ID = 'productinquiry_id';

    /**
     * Get productinquiry_id
     * @return string|null
     */
    public function getProductinquiryId();

    /**
     * Set productinquiry_id
     * @param string $productinquiryId
     * @return \Nodesolutions\ProductInquiry\ProductInquiry\Api\Data\ProductInquiryInterface
     */
    public function setProductinquiryId($productinquiryId);

    /**
     * Get prd_name
     * @return string|null
     */
    public function getPrdName();

    /**
     * Set prd_name
     * @param string $prdName
     * @return \Nodesolutions\ProductInquiry\ProductInquiry\Api\Data\ProductInquiryInterface
     */
    public function setPrdName($prdName);

    /**
     * Get prd_url
     * @return string|null
     */
    public function getPrdUrl();

    /**
     * Set prd_url
     * @param string $prdUrl
     * @return \Nodesolutions\ProductInquiry\ProductInquiry\Api\Data\ProductInquiryInterface
     */
    public function setPrdUrl($prdUrl);

    /**
     * Get cust_name
     * @return string|null
     */
    public function getCustName();

    /**
     * Set cust_name
     * @param string $custName
     * @return \Nodesolutions\ProductInquiry\ProductInquiry\Api\Data\ProductInquiryInterface
     */
    public function setCustName($custName);

    /**
     * Get cust_email
     * @return string|null
     */
    public function getCustEmail();

    /**
     * Set cust_email
     * @param string $custEmail
     * @return \Nodesolutions\ProductInquiry\ProductInquiry\Api\Data\ProductInquiryInterface
     */
    public function setCustEmail($custEmail);

    /**
     * Get cust_phn_no
     * @return string|null
     */
    public function getCustPhnNo();

    /**
     * Set cust_phn_no
     * @param string $custPhnNo
     * @return \Nodesolutions\ProductInquiry\ProductInquiry\Api\Data\ProductInquiryInterface
     */
    public function setCustPhnNo($custPhnNo);

    /**
     * Get cust_msg
     * @return string|null
     */
    public function getCustMsg();

    /**
     * Set cust_msg
     * @param string $custMsg
     * @return \Nodesolutions\ProductInquiry\ProductInquiry\Api\Data\ProductInquiryInterface
     */
    public function setCustMsg($custMsg);
}

