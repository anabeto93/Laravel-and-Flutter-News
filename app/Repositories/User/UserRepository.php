<?php

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserInterface
{
    public function all()
    {
        return User::paginate(10);
    }

    public function create(\App\DTO\UserData $user)
    {
        DB::beginTransaction();

        try {
            $nu = new User;
            $nu->first_name = $user->first_name;
            $nu->last_name = $user->last_name;
            $nu->email = $user->email;
            $nu->password = $user->password;
            
            $nu->save();
        } catch(\Exception $e) {
            DB::rollBack();

            throw $e;
        }

        DB::commit();

        return $nu;
    }

    public function find($id)
    {
        return User::findOrFail($id);
    }
}
