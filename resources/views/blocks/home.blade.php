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
            @if (($post->image_path)[-3] != 'm')
             <img style="width: 500px;"  src="{{ asset('images/' . $post->image_path)}}">
            @elseif ($post->image_path[-1]=='4')
            <video width="500px" controls>
            <source src="{{asset('images/' . $post->image_path)}}" type="video/mp4">
            Your browser does not support the video tag.
         </video> 
         @else
         <audio class="p-3" controls>
         <source src="{{asset('images/' . $post->image_path)}}" type="audio/mp3">

    </audio>
         @endif
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
        <p  class="text-sm  text-white"> Please login  to continue </p> 
    </div>
    <br>      
    <div class="p-3">
  <a href="{{route('login')}}" class =' mb-4  p-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded' >Login</a> 
</div>
  <br>
  <div class="p-3">
  <a href="{{route('register')}}" class =' mb-4  p-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded' >register</a> 
</div>
    
    @else
    @if ($mypost->count())
        @foreach ($mypost as $mypost)
            <div class="mb-4 w-full p-4 bg-gray-300 rounded " >
            <a href="{{route('dashboard')}}" class="font-bold" > {{$mypost->user->username}} </a> 
            <span class="text-sm"> {{$mypost->created_at->toTimeString()}} </span>
             {!!$mypost->body!!}
             @if ($mypost->image_path != 'no_value')
            @if (($mypost->image_path)[-3] != 'm')
             <img style="width: 200px;"  src="{{ asset('images/' . $mypost->image_path)}}">
            @else
            <video width="200" controls>
            <source src="{{asset('images/' . $mypost->image_path)}}" type="video/mp4">
            Your browser does not support the video tag.
         </video> 
         @endif
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
