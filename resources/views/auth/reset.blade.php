<head>
    <title> Reset Password </title>
</head>
@extends('layouts.index')

@section('content')

<div class="flex  justify-center">
    <div class="max-w-sm min-h-6 rounded overflow-hidden shadow-lg border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r  rounded-lg">
    <div class="w-full p-4 bg-gray-100">
        <h2> Reset password </h2>
    </div>
    <form action="#" method="post">
            @csrf
            <div class="p-4">
                <label for="email" class="sr-only" > email Adress</label>
                <input type="email" name="email" id="username" placeholder="email" value="{{old('email')}}" class="  w-full p-2 rounded-lg border-2" />       
            </div>
            @error('email')
            <div class="pl-4 text-red-500 text-sm">
                {{$message}}
            </div>
                
            @enderror
        
          
            <div class="p-4">
                <button type="submit" class="bg-blue-400 px-3 py-3 w-full rounded text-white"> Reset password </button>
            </div>
        
            
            
        </form>    

    </div>
</div>

@endsection
