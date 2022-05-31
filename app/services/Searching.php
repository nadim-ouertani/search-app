<?php

namespace App\services;

use App\Http\Requests\SearchUserRequest;
use App\Repositories\User\UserRepository;

Class Searching {
    public function user(SearchUserRequest $searchUserRequest, UserRepository $userRepository)
    {
        return $userRepository->search($searchUserRequest);
    }
}
