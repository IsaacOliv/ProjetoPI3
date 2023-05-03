<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function login()
    {
        return view('users.login');
    }
    public function check()
    {

    }
    public function register()
    {
        return view('users.register');
    }
    public function store(Request $request)
    {
        $user = $request->all();
        if ($user) {
            User::create($user);
            return redirect()->route('users.login')->with('Sucesso', 'Cadastrado com sucesso');
        }
    }

}
