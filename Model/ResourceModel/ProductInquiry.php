<?php
/**
 * Copyright © Nk All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Nodesolutions\ProductInquiry\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ProductInquiry extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('nodesolutions_productinquiry_productinquiry', 'productinquiry_id');
    }
}

