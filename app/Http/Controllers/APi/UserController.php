<?php

namespace App\Http\Controllers\APi;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        return User::create($data);
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user->fill($data);
        $user->save();
        return $user;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $user;
    }
}
