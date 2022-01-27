<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function post(){
        return view('blocks.post');
    }

    public function store(Request $request){
        $this -> validate($request,[
            'post' => ['required']
        ]);
      auth()->user()->post()->create([
          'body'=>$request->post,
          
      ]);
        return redirect('/home');

    }

    public function home(){
        
        $posts = Post::paginate(5);
        return view('blocks.home', ["posts" => $posts]);
    }
}
