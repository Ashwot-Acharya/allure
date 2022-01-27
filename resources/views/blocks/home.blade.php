<head>
    <title> allure:home </title>


</head>


@extends('layouts.index')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 p-3 bg-white " > 
    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="mb-4 p-4 bg-gray-300 rounded " >
            <a href="" class="font-bold" > {{$post->user->username}} </a> 
            <span class=" p-3 text-sm"> {{$post->created_at->toTimeString()}} </span>
             {!!$post->body!!}
            </div>
        
         @endforeach
         {{ $posts->links() }}
    @else
    There are no posts        
    @endif
    <div>
        
</div>
</div>

</div>
@endsection
