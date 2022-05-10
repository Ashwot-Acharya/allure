<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct(){
        $this -> middleware(['guest']);
    }

    public function registration(){
        return view('auth.register');
    }
    public function  store(Request $request){
        $this->validate($request,[
            'name'=>['required','max:255'],
            'username'=> ['required','max:255'],
            'password'=>['required','confirmed'],
            'email'=>['required','email','max:255'],
            'description'=>['required'],
            'image' =>['required']

        ]);
        $newImageName = uniqid() . '-' . $request->username . '.' . $request->image->extension();
        $request->image->move(public_path('profile'), $newImageName);

        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'profilepic' => $newImageName,
            'description'=>$request->description,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

        ]);


        auth()-> attempt($request->only('email','password'));


        return redirect()->route('dashboard');
    }

}
