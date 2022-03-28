<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allure</title>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
           // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

    var pusher = new Pusher('4ed1646741241630925c', {
    cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
    alert(JSON.stringify(data));
    });
        </script>
</head>
<body class='' >
    <nav class="p-6 bg-slate-700  text-white flex justify-between mb-6 " >
        <ul class="flex items-center"> 
            <li> <a href="{{Route('home')}}" class="p-3" >Home</a> </li>
            @if (auth()->user())
            <li> <a href="{{Route('post')}}" class="p-3" >Post</a> </li>
            @endif

                 
        </ul>  
         <ul class="flex items-center"> 
             @if (auth()->user())
             <li> <a href="{{Route('dashboard')}}" class="p-3" >{{auth()->user()->username}}</a> </li>
             <li> 
            <form action="{{route('logout')}}" method="post" class="inline" >
                @csrf
            <button  >Logout</button>
            </form>     
            </li>       
             @else
             <li> <a href="{{route('register')}}" class="p-3" >Register</a> </li>
            <li> <a href="{{route('login')}}" class="p-3" >Login</a> </li>  
                 
             @endif
              
  
        </ul>    
    
    
    </nav>
    @yield('content')
</body>
</html>