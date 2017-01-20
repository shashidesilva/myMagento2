<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\GiftCardAccount\Block\Checkout\Cart;

class Giftcardaccount extends \Magento\Checkout\Block\Cart\AbstractCart
{
    /**
     * URLs with secure/unsecure protocol switching
     *
     * @param string $route
     * @param array $params
     * @return string
     */
    public function getUrl($route = '', $params = [])
    {
        if (!array_key_exists('_secure', $params)) {
            $params['_secure'] = $this->getRequest()->isSecure();
        }
        return parent::getUrl($route, $params);
    }
}
