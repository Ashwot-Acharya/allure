<?php

namespace App\Http\Controllers\auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginoutController extends Controller
{
    public function logout(){
        auth()->logout();
       return redirect()->route('home');
    }

    public function updatepwd(Request $request){

        // $this->validate($request,[
        //     'oldpassword' => ['required'],
        //     'newpassword'=>['required','confirmed']
        // ]);
        if (Auth::attempt(['id' => Auth::id(), 'password' => $request->oldpassword])){
            $user=User::where('id',Auth::id())->first();
            $user->password=Hash::make($request->newpassword);
            $user->save();
            return redirect('home');
        }
    else{
        return back()-> with('status','previous password doesnt match');
    }

    }
}
