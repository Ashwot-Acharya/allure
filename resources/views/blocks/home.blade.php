<head>
    <title> allure:home </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>


@extends('layouts.index')
<div id="load" class="load">
  <hr/><hr/><hr/><hr/>
</div>
<style>
    body{background:#ECF0F1}

.load{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);
  /*change these sizes to fit into your project*/
  width:100px;
  height:100px;
}
.load hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}

.load :first-child{background:#19A68C;animation-delay:-1.5s}
.load :nth-child(2){background:#F63D3A;animation-delay:-1s}
.load :nth-child(3){background:#FDA543;animation-delay:-0.5s}
.load :last-child{background:#193B48}

@keyframes spin{
  0%,100%{transform:translate(0)}
  25%{transform:translate(160%)}
  50%{transform:translate(160%, 160%)}
  75%{transform:translate(0, 160%)}

}

</style>
<script>

setTimeout(() => {   document.querySelector('.load').classList.toggle('fade');
}, 2000);
setTimeout(() => { document.querySelector('.load').style.display = 'none';
}, 2000);

    </script>
@section('content')
<p class="p-3 text-2xl "> Community Posts </p>

<div class="flex">

    <div class=" p-3 grid grid-cols-4 gap-2  " >
    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="mb-4 p-4 max-w-sm min-h-6 rounded-3xl overflow-hidden shadow-lg border-r border-b rounded " >
                <div class="flex justify-between">
           <div> <img style="width:50px" class="rounded rounded-full" src="{{asset('profile/' . $post-> user -> profilepic) }}">
            <a href="profile/{{$post->user->username}}"  class="p-3  text-xl font-bold" > {{$post->user->username}} </a>
            <span class=" p-3 text-sm"> {{$post->created_at->toTimeString()}} </span> </div>
            <div> <button> <span class="material-symbols-outlined">
more_vert
</span> </button> </div>
        </div>
            <div style="padding: left 5px;" class=" p-3 prose prose-lg">
            {!!$post->body!!}
            </div>

            @if ($post->image_path != 'no_value')
            @if (($post->image_path)[-3] != 'm')

</style>
            <div style="max-height 130px; overflow:hidden;" class=" w-9/12  container">
             <img src="{{ asset('images/' . $post->image_path)}}">
</div>

            @elseif ($post->image_path[-1]=='4')
            <video width="500px" controls>
            <source src="{{asset('images/' . $post->image_path)}}" type="video/mp4">
            Your browser does not support the video tag.
         </video>
         @else
         <audio class="w-9/12" controls>
         <source src="{{asset('images/' . $post->image_path)}}" type="audio/mp3">

    </audio>
         @endif
            @endif
            <div class="p-3">  <button> <span class="material-symbols-outlined">
favorite
 </span> </button> <a> <span class="material-symbols-outlined">add </a> <a href="mailto: ?subject=Lets connect in allure.websitelink &body=Hello there i am {{$post->user->name}} Lets talk and connect "> <span class="material-symbols-outlined">google_plus_reshare</span> </a> </span> </div>


            </div>

         @endforeach
            {{ $posts->links('pagination::tailwind') }}
    @else
    There are no posts
    @endif

</div>
<!-- <div class=" w-4/12 p-3 flex-none bg-slate-700  " >
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
<!-- ____________ NEW SECTION __________ -->
<!-- 
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
</div> -->

    @endif 



</div> </siv>
</div>

<style>
    h1,
h2 {
  font-weight: 500;
  margin: 0px 0px 5px 0px;
}

h1 {
  font-size: 16px;
}

h2 {
  font-size: 14px;
}
    </style>



@endsection
