<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Support\Controller\Adminhtml\Report;

use Magento\Framework\Controller\ResultFactory;

/**
 * Report index action
 */
class Index extends \Magento\Support\Controller\Adminhtml\Report
{
    /**
     * Execute action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Magento_Support::support_report');
        $resultPage->getConfig()->getTitle()->prepend(__('System Reports'));
        return $resultPage;
    }
}
