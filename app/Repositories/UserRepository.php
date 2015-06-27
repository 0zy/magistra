<?php
namespace App\Repositories;

use App\User;
use Carbon\Carbon;

class UserRepository
{
    public function findByUserNameOrCreate($userData)
    {
        $user = User::where('email', '=', $userData->email)->first();
        list($first, $last) = explode(" ", $userData->name);

        if(!$user)
        {
            $user = User::create([
                'first_name' => $first,
                'last_name' => $last,
                'email' => $userData->email,
                'is_admin' => 0,
                'is_teacher' => 0,
                'latitude' => "",
                'longitude' => "",
                'last_login_at' => Carbon::now()
            ]);
        }

        $this->checkIfUserNeedsUpdating($userData, $user);
        return $user;
    }

    public function checkIfUserNeedsUpdating($userData, $user)
    {

        list($first, $last) = explode(" ", $userData->name);
        $socialData = [
            'email' => $userData->email,
            'first_name' => $first,
            'last_name' => $last,
        ];
        $dbData = [
            'email' => $user->email,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
        ];

        if (!empty(array_diff($socialData, $dbData))) {
            $user->email = $userData->email;
            $user->first_name = $first;
            $user->last_name = $last;
        }
        $user->last_login_at = Carbon::now();
        $user->save();
    }
}