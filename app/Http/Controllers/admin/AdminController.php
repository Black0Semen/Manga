<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Moders')->with(compact('users'));
    }
    
    public function delete(User $user)
    {
    $user->delete();
    return redirect('/Moders');
    }
    
    public function edit(User $user)
    {
    $users = User::all();
    return view('admin.update')->with(compact('user'));
    }
    
    public function update(Request $request)
    {
    //$request->validate([
    //'surname'=>['regex:/^[А-ЯЁ][а-яё]{2,}$/u'],
    //'phone'=>['regex:/^\d{4,11}$/u'],
    //'stage'=>['min:1','regex:/^\d+$/u'],
    //'staff_id'=>['exists:staffs,id'],
    //]);
    $user = User::find($request->id);
    $user->namelogin = $request->namelogin;
    $user->email = $request->email;
    $user->roles = $request->roles;
    $user->save();
    return redirect('/admin');
    }
}