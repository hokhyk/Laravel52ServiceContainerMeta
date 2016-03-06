<?php

namespace App\Services;

use App;
use App\Services\User\AbstractUser;

class UserService
{
    public function show(string $type)
    {
        App::bind(AbstractUser::class, 'App\Services\User\\' . ucfirst($type));
        App::make(AbstractUser::class)->show();
    }
}