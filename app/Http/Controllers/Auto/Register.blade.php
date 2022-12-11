<?php

namespace App\Http\Controllers\Auto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auto.register');
    }

    public function store()
    {

    }
}