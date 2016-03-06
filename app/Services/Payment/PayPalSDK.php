<?php


namespace App\Services\Payment;

class PayPalSDK
{
    /**
     * 付款
     *
     * @param int $amount
     */
    public function pay(int $amount)
    {
        echo('PayPal pay ' . $amount);
    }
}