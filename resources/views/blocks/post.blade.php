<head>
    <title> allure:post </title>
    <script src="http://cdn.ckeditor.com/4.17.1/basic/ckeditor.js"></script>

</head>


@extends('layouts.index')

@section('content')
<div class="flex  justify-center">
    <div class="w-8/12 p-3 bg-white  rounded-lg" >
     <div class="text-center center" >
     </h3> Message</h3>
     <form action="{{route('post')}}" method="post" >
         @csrf
         <textarea name="post"></textarea>
                <script>                 
                var editor = CKEDITOR.replace('post');
                </script>
                @error('post')
                    <p class=" small-text red-200 "> This feild is required </p>
                @enderror
                <br>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"> post </button> 
        </form>
     </div>

    </div>

</div>
@endsection
