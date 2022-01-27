<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashBoardController extends Controller
{
    public function index(){
        $user = Auth::user()-> id;
        $post = Post::where('user_id','=', $user) -> get();
        //  $posts = Post::where( $user == Post()->user_id);
         return view('blocks.dashboard', ["posts" => $post]);
        
    }

    public function delete($id){
        $post= Post::where('id',$id)->first();
        $post -> delete();
       return back();    }
}
