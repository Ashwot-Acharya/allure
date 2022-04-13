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
            'post' =>'required',
            'image' =>'mimes:png,jpg,mp4,mp3,gif',
            'title'=> 'required|max:200'     
           ]);
           if ($request->image == null ) {
            auth()->user()->post()->create([
                'body'=>$request->post,
                'image_path' => "no_value",
                
                
            ]);
              return redirect('/home'); 
      
            }
            elseif($request->image != null){
                      $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
      
      auth()->user()->post()->create([
          'body'=>$request->post,
          'image_path' => $newImageName,
          
          
      ]);
        return redirect('/home'); 

            }

  

    }

    public function home(){
        
        $posts = Post::orderBy('id','desc')->paginate(5);  
        if (Auth::guest()){
            return view('blocks.home',['posts'=>$posts], ['mypost' => "nopost"] );

        }  
        $user = Auth::user()-> id;
    
        $mypost = Post::where('user_id','=', $user)->orderBy('id','desc') -> paginate(3);
        return view('blocks.home', ["posts" => $posts] , ['mypost'=>$mypost]);

             
            
        
    }
    public function cow(){
        $user = Auth::user()-> id;
        $post = Post::where('user_id','=', $user) -> get();
        //  $posts = Post::where( $user == Post()->user_id);
        
        return view('blocks.trial',["posts"=>$posts]);
    }
}
