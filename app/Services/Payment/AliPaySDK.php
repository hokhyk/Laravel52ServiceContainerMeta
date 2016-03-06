<?php


namespace App\Services\Payment;


class AliPaySDK
{
    /**
     * 付款
     *
     * @param $amount
     */
    public function bill($amount)
    {
        echo('AliPay bill ' . $amount);
    }
}