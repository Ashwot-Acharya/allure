<head>
    <title> allure:Register </title>
</head>

@extends('layouts.index')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white  rounded-lg" >
        <h3 class="text-center"> Register</h3>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="p-4">
                <label for="name" class="sr-only" > name</label>
                <input type="text" name="name" id="name" placeholder="Your name" value="{{old('name')}}" class=" bg-gray-200 w-full p-4 rounded-lg border-2" />
                        
            </div>
            @error('name')
            <div class=" pl-4 text-red-600 text-sm">
                {{$message}}
            </div>
                
            @enderror
            <div class="p-4">
                <label for="username" class="sr-only" > usename</label>
                <input type="text" name="username" id="username" placeholder="Username" value="{{old('username')}}" class=" bg-gray-200 w-full p-4 rounded-lg border-2" />       
            </div>
            @error('username')
            <div class="pl-4 text-red-500 text-sm">
                {{$message}}
            </div>
                
            @enderror
            <div class="p-4">
                <label for="email" class="sr-only" > Email</label>
                <input type="Email" name="email"  id="email" placeholder="Your Email" value="{{old('email')}}" class="bg-gray-200 w-full p-4 rounded-lg border-2" />
                        
            </div >
            @error('email')
            <div class="pl-4 text-sm text-red-500">
                {{$message}}
            </div>
                
            @enderror
            <div class="p-4">
                <label for="password" class="sr-only" > password</label>
                <input type="password" name="password" id="password" placeholder="Enter password" value="" class="bg-gray-200 w-full p-4 rounded-lg border-2" />
                        
            </div>

            @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
                
            @enderror
            <div class="p-4">
                <label for="againpassword" class="sr-only" > Confirm password </label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="confirm-password" value="" class="bg-gray-200 w-full p-4 rounded-lg border-2" />
      
            </div>
            <div class="p-4">
                <button type="submit" class="bg-blue-400 px-3 py-3 p-4 w-full rounded text-white"> Register </button>
            </div>
        </form>    
        </div>

</div>
@endsection
