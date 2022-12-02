<head>
    <title> allure:Login </title>
</head>

@extends('layouts.index')

@section('content')
<body>
    <div class=" p-12 bg-gray-100">
<div class="flex  justify-center">
    <div class="max-w-sm min-h-6 rounded-3xl overflow-hidden shadow-lg border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r  rounded-lg" >
     <div class="bg-gray-100 w-full">   <h2 class=" text-violet-500 p-3"> Login</h2> </div>
            @if (session('status'))
            <div class="p-4">
            <div class="text-white bg-red-700 w-full px-3 py-3 p-4 w-full rounded border-2">

                    {{session('status')}}   
                    </div>
</div>
            @endif
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="p-4">
                <label for="username" class="sr-only" > usename</label>
                <input type="text" name="username" id="username" placeholder="Username" value="{{old('username')}}" class="  w-full p-2 rounded-lg border-2" />       
            </div>
            @error('username')
            <div class="pl-4 text-red-500 text-sm">
                {{$message}}
            </div>
                
            @enderror
            
            <div class="p-4">
                <label for="password" class="sr-only" > password</label>
                <input type="password" name="password" id="password" placeholder="Enter password" value="" class="w-full p-2 rounded-lg border-2" />
                        
            </div>

            @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
                
            @enderror
            <div>
            
            <a class="p-4 text-blue-500 " href="/resetpassword"> Forgot Password? </a>
            <a class="p-4 text-blue-500 text-right" href="/register"> Register </a>

          
          </div>
  
          
            <div class="p-4">
                <button type="submit" class="bg-blue-400 px-3 py-3 w-full rounded text-white"> Login </button>
            </div>
        
            
            
        </form>    
        </div>

</div>
</div>
<body>
@endsection
