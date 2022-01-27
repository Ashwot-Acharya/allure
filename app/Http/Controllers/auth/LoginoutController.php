<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginoutController extends Controller
{
    public function logout(){
        auth()->logout();
       return redirect()->route('home');
    }
}
