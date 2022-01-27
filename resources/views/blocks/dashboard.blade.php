
<head>
    <title> allure:Dashboard </title>
</head>

@extends('layouts.index')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 p-3 bg-white  rounded-lg" >
       <ul class="flex items-center"> 
             <li> <a href="" class="p-3 bg-blue-300 " > My Posts</a> </li>
             <li> <a href="" class="p-3 bg-gray-100 " > My profile</a> </li>
        </ul> 
        <p>   </p>   
    
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

</div>
@endsection


