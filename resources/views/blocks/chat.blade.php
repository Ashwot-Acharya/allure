<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with us:</title>
</head>
<body>
    @extends('layouts.index')
    @section('content')
    <div class="" style="height: 500px;">

</div>
<div>
    <form action="" id="form" method="" >
        <input name="message" id="message_input" class="form-control p-3 block w-full px-3py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  roundedfocus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type = "text" />

        <button   class="inline-block p-3  bg-blue-300 text-black font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out" > Submit </button>

    </form>
</div>

<script src="{{asset('js/app.js')}}">

    </script>
    @endsection
 
</body>
</html>