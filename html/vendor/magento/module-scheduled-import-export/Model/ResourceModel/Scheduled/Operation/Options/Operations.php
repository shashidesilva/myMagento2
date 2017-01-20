<?php
/**
 * Import/Export Schedule operations option array
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\ScheduledImportExport\Model\ResourceModel\Scheduled\Operation\Options;

class Operations implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var \Magento\ScheduledImportExport\Model\Scheduled\Operation\Data
     */
    protected $_modelData;

    /**
     * @param \Magento\ScheduledImportExport\Model\Scheduled\Operation\Data $model
     */
    public function __construct(\Magento\ScheduledImportExport\Model\Scheduled\Operation\Data $model)
    {
        $this->_modelData = $model;
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return $this->_modelData->getOperationsOptionArray();
    }
}
