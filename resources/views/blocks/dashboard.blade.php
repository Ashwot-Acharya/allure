
<head>
    <title> allure:Dashboard </title>
    <link rel="stylesheet" href="{{asset('scss/dashboard.css')}}">
</head>

@extends('layouts.index')

@section('content')
@csrf
            @if (session('status')) 
            <script>

</script>
            
            <div class="p-4">
            <div id='session-s' class="text-white bg-red-700 w-full px-3 py-3 p-4 w-full rounded border-2">

                    {{session('status')}}   

                    </div>
</div>
            @endif
            <div clas
<!-- section 1  -->
<section id="three" class="form">
      <div class="login-wrap  bg-white ">
        <div class="login-html">
    
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class=" text-black tab">My Posts</label>
          <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class=" text-black tab">My Profile</label>
          <div class="login-form">
             
<div class="sign-in-htm  justify-center">
       
         
    
        @if ($posts->count())
        @foreach ($posts as $post)
            <div class="mb-4 p-4 bg-gray-300 rounded " >
            <a href="" class="font-bold" > {{$post->user->username}} </a> 
            <span class="text-sm"> {{$post->created_at->toTimeString()}} </span>
             {!!$post->body!!}
             @if ($post->image_path != 'no_value')
            <img style="width:350px"  src="{{ asset('images/' . $post->image_path)}}">
            @endif
             <br>
                
                <form action="{{url('/post/delete/').'/'.$post->id}}" method="post" >
                    @csrf
                <button type="submit" class="bg-gray-400 hover:bg-blue-300 text-white font-bold py-2 px-4 rounded-full"  > Delete </button>    </form>
    
</div>
        
         @endforeach
         {{ $posts->links('pagination::tailwind') }} 
       
    @else
    There are no posts        
    @endif



</div>
<!-- section 2  -->
<div class="sign-up-htm">
<form action="{{route('changepwd')}}" method="post">
            @csrf
  
            <div class="p-4">
                <label for="oldpassword" class="sr-only" > Old password</label>
                <input type="password" name="oldpassword" id="oldpassword" placeholder="old password" value="{{old('password')}}" class=" bg-gray-200 w-full p-4 rounded-lg border-2" />       
            </div>
            @error('oldpassword')
            <div class="pl-4 text-red-500 text-sm">
                {{$message}}
            </div>
                
            @enderror
            
            <div class="p-4">
                <label for="password" class="sr-only" >New password</label>
                <input type="password" name="newpassword" id="newpassword" placeholder="new password" value="" class="bg-gray-200 w-full p-4 rounded-lg border-2" />
                        
            </div>

            @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
            @enderror
            
            <div class="p-4">
                <label for="password" class="sr-only" >New password</label>
                <input type="password" name="password_confirmation" id="newpassword" placeholder="new password" value="" class="bg-gray-200 w-full p-4 rounded-lg border-2" />
                        
            </div>

            @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
            
                
            @enderror
          
            <div class="p-4">
                <button type="submit" class="bg-blue-400 px-3 py-3 p-4 w-full rounded text-white"> Login </button>
            </div>
            
            
            
        </form>    
</div>

</div>
</div>

</section>


@endsection


