<?php

namespace App\Repositories;

use App\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    /** @var User */
    private $user;

    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 傳回所有User
     *
     * @return Collection
     */
    public function getAllUsers()
    {
        return $this->user->all();
    }
}