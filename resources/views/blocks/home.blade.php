<head>
    <title> allure:home </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>


@extends('layouts.index')

@section('content')
<div class="flex  justify-center">
    <div class="w-9/12 p-3 " > 
        <p class="p-3 text-2xl "> Community Posts </p>
    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="mb-4 p-4 bg-gray-300 rounded " >
            <a href="" class="font-bold" > {{$post->user->username}} </a> 
            <span class=" p-3 text-sm"> {{$post->created_at->toTimeString()}} </span>
            <div class="prose prose-lg">
            {!!$post->body!!}
            </div>
            @if ($post->image_path != 'no_value')
            <img style="width: 500px;"  src="{{ asset('images/' . $post->image_path)}}">
            @endif
           
   
            </div>
        
         @endforeach
            {{ $posts->links('pagination::tailwind') }} 
    @else
    There are no posts        
    @endif
   
</div>
<div class=" w-4/12 p-3 flex-none bg-slate-700  " >
      <p class='text-primary p-3 text-white' > My Recent Posts </p>
    @if ($mypost == "nopost")
        <div class="mb-4  p-4  rounded " >
        <span class="text-white ">  You are not logged in </span>
        <p  class="text-sm text-white"> Please login  to continue </p> 
    </div>
    <br>      
  <a href="{{route('login')}}" class =' mb-4  p-4 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded' >Login</a> 
  <a href="{{route('register')}}" class =' mb-4  p-4 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded' >register</a> 

    
    @else
    @if ($mypost->count())
        @foreach ($mypost as $mypost)
            <div class="mb-4 w-full p-4 bg-gray-300 rounded " >
            <a href="{{route('dashboard')}}" class="font-bold" > {{$mypost->user->username}} </a> 
            <span class="text-sm"> {{$mypost->created_at->toTimeString()}} </span>
             {!!$mypost->body!!}
             @if ($mypost->image_path != 'no_value')
            <img style="width:350px"  src="{{ asset('images/' . $mypost->image_path)}}">
            @endif


             <br>
                             
</div>
        
        @endforeach
        

   @else
   There are no posts        
   @endif

        
    @endif
  


</div>
</div>



@endsection
