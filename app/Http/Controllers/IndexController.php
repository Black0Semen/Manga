<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends Controller
{
    public function mainShow(){
        return view('home');
    }
    public function order(){
        return view('order');
    }
    public function top(){
        return view('top');
    }
    public function Registr(){
        return view('Registr');
    }
    public function Auth(){
        return view('Auth');
    }
    //konpni'ihm',mmjhg8ygk
}
