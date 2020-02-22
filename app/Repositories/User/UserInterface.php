<?php

namespace App\Repositories\User;

interface UserInterface
{
    public function all();

    public function create(\App\DTO\UserData $user);

    public function find($id);
}
