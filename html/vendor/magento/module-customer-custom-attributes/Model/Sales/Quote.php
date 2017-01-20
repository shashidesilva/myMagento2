<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\CustomerCustomAttributes\Model\Sales;

/**
 * Customer Quote model
 *
 * @method \Magento\CustomerCustomAttributes\Model\ResourceModel\Sales\Quote _getResource()
 * @method \Magento\CustomerCustomAttributes\Model\ResourceModel\Sales\Quote getResource()
 * @method \Magento\CustomerCustomAttributes\Model\Sales\Quote setEntityId(int $value)
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Quote extends AbstractSales
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magento\CustomerCustomAttributes\Model\ResourceModel\Sales\Quote');
    }
}
