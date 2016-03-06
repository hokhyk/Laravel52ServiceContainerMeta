<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\UserService;

class UserController extends Controller
{
    /** @var UserService */
    private $userService;

    /**
     * UserController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function show()
    {
        $this->userService->show('admin');
    }
}
