<?php

namespace App\Repositories\User;


use App\Models\User;

interface UserInterface {
    public function getAll();
    public function find(User $user);
    public function delete(User $user);
    public function search($query);
}
