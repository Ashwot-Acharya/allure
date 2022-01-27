<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class check_user_post
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if($request->user()!== Auth::user()){
        return redirect('home');
        }

        return $next($request);
    }
}
