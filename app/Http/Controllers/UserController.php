<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        return view('user.index')
                ->with('users', $users);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
