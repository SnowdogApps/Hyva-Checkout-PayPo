<?php

namespace Snowdog\Hyva\Checkout\PayPo\Magewire\Payment;

use Hyva\Checkout\Model\Magewire\Payment\AbstractPlaceOrderService;
use Magento\Quote\Model\Quote;

class PlaceOrderServiceProvider extends AbstractPlaceOrderService
{
    public function getRedirectUrl(Quote $quote, ?int $orderId = null): string
    {
        return '/paypo/redirect/index';
    }
}