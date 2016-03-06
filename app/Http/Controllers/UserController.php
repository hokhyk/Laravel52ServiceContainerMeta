<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\Payment\PaymentEnum;
use App\Services\PaymentService;
use App\Services\UserService;

class UserController extends Controller
{
    /** @var UserService  */
    private $userService;
    /** @var PaymentService */
    private $paymentService;

    /**
     * UserController constructor.
     * @param UserService $userService
     * @param PaymentService $paymentService
     */
    public function __construct(UserService $userService, PaymentService $paymentService)
    {
        $this->userService = $userService;
        $this->paymentService = $paymentService;
    }

    public function show()
    {
        $this->userService->show('Admin');
        $this->paymentService->setPayment(PaymentEnum::AliPay);
        $this->paymentService->checkout(1000);
    }
}
