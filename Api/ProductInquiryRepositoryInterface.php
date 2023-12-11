<?php
/**
 * Copyright © Nodesolutions All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Nodesolutions\ProductInquiry\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface ProductInquiryRepositoryInterface
{

    /**
     * Save ProductInquiry
     * @param \Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterface $productInquiry
     * @return \Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterface $productInquiry
    );

    /**
     * Retrieve ProductInquiry
     * @param string $productinquiryId
     * @return \Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($productinquiryId);

    /**
     * Retrieve ProductInquiry matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Nodesolutions\ProductInquiry\Api\Data\ProductInquirySearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete ProductInquiry
     * @param \Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterface $productInquiry
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterface $productInquiry
    );

    /**
     * Delete ProductInquiry by ID
     * @param string $productinquiryId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($productinquiryId);
}

