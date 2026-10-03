<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{

    public function create()
    {
        return view('register');
    }
    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());
        return view('register_success');
    }
}
