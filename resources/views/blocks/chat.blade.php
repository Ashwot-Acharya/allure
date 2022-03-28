<!DOCTYPE html>
<html lang="en">
<head>
    <title> allure:Chat </title>
    <script src="{{asset('js/app.js')}}"> </script>
</head>


@extends('layouts.index')

@section('content')
<header>
    <h1> Lets talk </h1>

</header>
<div class="flex  justify-center">
    <div class="w-8/12 p-3 bg-white  rounded-lg" >
     <div class="text-center center" >
    <div id='messages'></div>
    <form id='message_form'>
    <input type ='text' name='message' id ='message_input' placeholder ='message'>

    <button type='submmit' id ='message_send'> send message </button>
    </form>
</div>
@endsection
</body>
</html>
