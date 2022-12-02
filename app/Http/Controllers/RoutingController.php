<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class RoutingController extends Controller
{
    public function home(){
        return view('blocks.home');
    }

    public function profile($username){
        $user = User::where('username', $username)->get();

        return view("blocks.Profile",["post" => $user]);
    }
    public function downloadqr($name){


    }
    public function reset(){
        return view('auth.reset');

    }

}
