
<head>
    <title> allure:Dashboard </title>
    <link rel="stylesheet" href="{{asset('scss/dashboard.scss')}}">
</head>

@extends('layouts.index')

@section('content')
<!-- section 1  -->
<section id="three" class="form">
      <div class="login-wrap  bg-white ">
        <div class="login-html">
    
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">My Posts</label>
          <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">My Profile</label>
          <div class="login-form">
             
<div class="sign-in-htm  justify-center">
       
         
    
        @if ($posts->count())
        @foreach ($posts as $post)
            <div class="mb-4 p-4 bg-gray-300 rounded " >
            <a href="" class="font-bold" > {{$post->user->username}} </a> 
            <span class="text-sm"> {{$post->created_at->toTimeString()}} </span>
             {!!$post->body!!}
             <br>
                
                 <a class="bg-gray-400 hover:bg-blue-300 text-white font-bold py-2 px-4 rounded-full"  href = "{{url('/post/delete/').'/'.$post->id}}"> Delete </a>    
    
</div>
        
         @endforeach
       
    @else
    There are no posts        
    @endif



</div>
<!-- section 2  -->
<div class="sign-up-htm">
    adskfj
</div>

</div>
</div>

</section>


@endsection


