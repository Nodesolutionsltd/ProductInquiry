<?php
/**
 * Copyright © Nodesolutions All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Nodesolutions\ProductInquiry\Api\Data;

interface ProductInquirySearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get ProductInquiry list.
     * @return \Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterface[]
     */
    public function getItems();

    /**
     * Set prd_name list.
     * @param \Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

