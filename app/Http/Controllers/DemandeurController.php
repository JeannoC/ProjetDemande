<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeurController extends Controller
{
    public function signup(){
        return view('signup');
    }

    public function signin(){
        return view('signin');
    }

    public function profile(){
        return view('profile');
    }
}
