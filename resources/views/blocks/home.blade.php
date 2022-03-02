<head>
    <title> allure:home </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>


@extends('layouts.index')

@section('content')
<div class="flex justify-center">
    <div class="w-9/12 p-3 bg-stale-700 " > 
    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="mb-4 p-4 bg-gray-300 rounded " >
            <a href="" class="font-bold" > {{$post->user->username}} </a> 
            <span class=" p-3 text-sm"> {{$post->created_at->toTimeString()}} </span>
             {!!$post->body!!}
            </div>
        
         @endforeach
            {{ $posts->links('pagination::tailwind') }} 
    @else
    There are no posts        
    @endif
    <div>
        
</div>
</div>

</div>
@endsection
