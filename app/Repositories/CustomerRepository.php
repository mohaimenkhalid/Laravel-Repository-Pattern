<?php

namespace App\Repositories;

use App\User;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function allUser() {
        return User::orderBy('name')
            ->where('active', 1)
            ->get()
            ->map->format();

       /* return User::orderBy('name')
            ->where('active', 1)
            ->get()
            ->map(function($user) {
                return $this->format($user);
            });*/
    }

    public function findById($userId) {
        return User::findOrFail($userId)
            ->format();
    }

   /* protected function format($user) {
        return [
            'user_id' => $user->id,
            'user_name' => $user->name,
            'register_date' => $user->created_at,
        ];
    }*/

}
