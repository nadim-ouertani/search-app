<?php
namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserInterface as UserInterface;


class UserRepository implements UserInterface
{
    function __construct() {
    }


    public function getAll()
    {
        return User::all()->paginate(10);
    }


    public function find(User $user)
    {
        return User::find($user->id);
    }

    public function edit(User $user)
    {
        return $user->save();
    }


    public function delete(User $user)
    {
        return User::find($user->id)->delete();
    }

    public function search($query)
    {
        return User::where('name', 'LIKE', "%$query->search%")->paginate(50);
    }
}
