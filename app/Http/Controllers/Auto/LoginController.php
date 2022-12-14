<?php

namespace App\Http\Controllers\Auto;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('Auto.login');
    }

    public function store(Request $request)
    {
        $creadentials = $request->validate([
                            'email' => ['required', 'string', 'email'],
                            'password' => ['required', 'string']
                            ]);
        if(! Auth::attempt($creadentials))
        {
            return back()
                ->withInpit()
                ->withErrors([
                    'email' => 'нет такой почты'
                ]);
        }

        
        return redirect()->route('/');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }
}