<?php

namespace App\Services;

use App;
use App\Services\Payment\PaymentInterface;

class PaymentService
{
    /** @var PaymentInterface */
    private $payment;

    /**
     * 設定第三方支付機構
     *
     * @param string $paymentName
     */
    public function setPayment(string $paymentName)
    {
        App::bind(PaymentInterface::class, 'App\Services\Payment\\' . $paymentName);
        $this->payment = App::make(PaymentInterface::class);
    }

    /**
     * 付款
     *
     * @param int $amount
     */
    public function checkout(int $amount)
    {
        $this->payment->checkout($amount);
    }
}