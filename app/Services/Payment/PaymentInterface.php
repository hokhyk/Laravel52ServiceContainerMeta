<?php

namespace App\Services\Payment;

interface PaymentInterface
{
    /**
     * 使用金流付款
     *
     * @param int $amount
     * @return void
     */
    public function checkout(int $amount);
}