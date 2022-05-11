<head>
    <title> allure:post </title>
    <script src="http://cdn.ckeditor.com/4.17.1/basic/ckeditor.js"></script>

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
<div class="flex  justify-center">
    <div class="w-8/12 p-3 bg-white  rounded-lg" >
     <div class="text-center center" >
     </h3> Message</h3>
     <form action="{{route('post')}}"  enctype="multipart/form-data"  method="post" >
         @csrf
       <div class="p-3">  <input type = "text" class=" p-3 roundedc bg-gray-300" name="title" placeholder="Title">
                @error('title')
                <p class=" small-text red-200 "> This feild is required </p>
                @enderror
</div>
         <textarea name="post"></textarea>
                <script>
                var editor = CKEDITOR.replace('post');
                </script>
                @error('post')
                    <p class=" small-text red-200 "> This feild is required </p>
                @enderror
                <br>

                <input type="file" class="mb-4  p-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded placeholder="Images, videos or audio" name = "image"  >
                @error('image')
                <p class=" small-text red-200 "> error </p>
                @enderror
                <br>


                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"> post </button>
        </form>
     </div>

    </div>

</div>
@endsection
