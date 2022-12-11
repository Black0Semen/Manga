<?php

namespace App\Http\Controllers\Auto;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('Auto.register');
    }

    public function store(Request $request)
    {
        $request->validate([
                            'namelogin' => ['required', 'string'],
                            'email' => ['required', 'string', 'email', 'unigue:users'],
                            'password' => ['required', 'confirmed', 'min:8']
                            ]);

        $user = User::create([
                              'namelogin' => $request->namelogin,
                              'email' => $request->email,
                              'password' => Hash::make($request->password)
                            ]);
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}