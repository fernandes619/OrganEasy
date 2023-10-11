<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('login');
    }

    public function login_action(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        dd($validator);
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $data = $request->only('name', 'email', 'password');

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect(route('login'));
    }
}