<head>
    <title> allure:Register </title>
</head>

@extends('layouts.index')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white max-w-sm  rounded overflow-hidden shadow-lg border-r border-b border-l border-gray-400 " >
      <div class="w-full bg-gray-200 p-4 ">
    <h3 class=""> Register</h3>
</div>
    <form enctype="multipart/form-data" action="{{route('register')}}" method="post">
            @csrf
            <div class="p-3">
                <label for="name" class="sr-only" > name</label>
                <input type="text" name="name" id="name" placeholder="Your name" value="{{old('name')}}" class="  w-full p-2 rounded-lg border-2" />

            </div>
            @error('name')
            <div class=" pl-4 text-red-600 text-sm">
                {{$message}}
            </div>

            @enderror
            <div class="p-3">
                <label for="username" class="sr-only" > usename</label>
                <input type="text" name="username" id="username" placeholder="Username" value="{{old('username')}}" class=" w-full p-2 rounded-lg border-2" />
            </div>
            @error('username')
            <div class="pl-4 text-red-500 text-sm">
                {{$message}}
            </div>

            @enderror
            <div class="p-3">
                <label for="email" class="sr-only" > Email</label>
                <input type="Email" name="email"  id="email" placeholder="Your Email" value="{{old('email')}}" class=" w-full p-2 rounded-lg border-2" />

            </div >
            @error('email')
            <div class="pl-4 text-sm text-red-500">
                {{$message}}
            </div>

            @enderror
            <div class="p-3">
                <label for="password" class="sr-only" > password</label>
                <input type="password" name="password" id="password" placeholder="Enter password" value="" class="] w-full p-2 rounded-lg border-2" />

            </div>

            @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
            @enderror
            <div class="p-3">
                <label for="againpassword" class="sr-only" > Confirm password </label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="confirm-password" value="" class=" w-full p-2 rounded-lg border-2" />

            </div>

            @error('description')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
            @enderror
            <div class="p-3">
                <label for="BIO" class="sr-only" > Descriptiom </label>
                <input type="text" name="description" id="descriptioon" placeholder="Description" value="" class=" w-full p-2 rounded-lg border-2" />

            </div>

            @error('image')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
            @enderror
            <div class="p-3">
                <label for="profile pic" class="sr-only" > Image </label>
                <input type="file" name="image" id="" placeholder="Profile Image" value="" class="w-full p-2 rounded-lg border-2" />

            </div>
                
            <div>
                <div> 
                    <a href="/login" class=" p-3 text-blue-500"> Login instead </a>
                    

             </div>
    
            <div class="p-3">
                <button type="submit" class="bg-blue-400 px-3 py-3 p-4 w-full rounded text-white"> Register </button>
            </div>
        </form>
        </div>

</div>
@endsection
