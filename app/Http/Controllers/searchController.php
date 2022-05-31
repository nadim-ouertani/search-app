<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchUserRequest;
use App\Repositories\User\UserRepository;
use App\services\Searching;
use App\Models\User;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function commonIndex()
    {
        return view('search');
    }

    public function commonSearch(Request $request)
    {
        $this->validate($request, [
            'search' => 'bail|required|alpha',
        ]);
        $results = User::where('name', 'LIKE', "%$request->search%")->paginate(50);
        return view('search', [
            'results' => $results,
        ]);
    }

    public function shouldIndex()
    {
        return view('newSearch');
    }

    public function shouldSearch(Searching $Searching, SearchUserRequest $searchUserRequest, UserRepository $userRepository)
    {
        return view('newSearch', [
            'results' => $Searching->user($searchUserRequest, $userRepository)
        ]);
    }
}
