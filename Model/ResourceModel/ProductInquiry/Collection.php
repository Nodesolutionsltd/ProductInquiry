<?php
/**
 * Copyright © Nodesolutions All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Nodesolutions\ProductInquiry\Model\ResourceModel\ProductInquiry;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'productinquiry_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Nodesolutions\ProductInquiry\Model\ProductInquiry::class,
            \Nodesolutions\ProductInquiry\Model\ResourceModel\ProductInquiry::class
        );
    }
}

