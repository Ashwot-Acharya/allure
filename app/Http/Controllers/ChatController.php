<?php

namespace App\Http\Controllers;
use App\Event\Message;
use Illuminate\Http\Response; 
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat(Request $request){
        $username = auth()->user()->username;
        $message = $request->message;

        event(new Message($username,$message));
        return ['success'=>true];

    }
    public function gochat(){
        return view('blocks.chat');
    }
}
