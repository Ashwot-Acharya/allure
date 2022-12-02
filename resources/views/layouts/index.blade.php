<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allure</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.tailwindcss.com"></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id='main_body' class="bg-gray-100" >
    <nav class="p-6 bg-slate-400  text-white flex justify-between mb-6 " >
        <ul class="flex items-center">
            <li> <a href="{{Route('home')}}" class="text-xl p-3 " > Allure  </a>  </li>
            @if (auth()->user())
            <li> <a href="{{Route('post')}}" class="p-3" >Post</a> </li>
            @endif


        </ul>
         <ul class="flex items-center">
             @if (auth()->user())
             <li>
                    <style>
                    .dropbtn {
                    color: white;
                    padding: 16px;
                    font-size: 16px;
                    cursor: pointer;
                    }

                    .dropdown {
                    position: relative;
                    display: inline-block;
                    }

                    .dropdown-content {
                    right:0;
                    display: none;
                    position: absolute;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                    }

                    .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                    }

                    .dropdown-content a:hover {background-color: #f1f1f1}

                    .dropdown:hover .dropdown-content {
                    display: block;
                    }
                    </style>


                        <div class="dropdown">
                            <div style="display:flex;">
                        <img width="50px" class="rounded rounded-full"   src="{{asset('profile/' . auth()->user()->profilepic )}}" alt="profile image" >
                        <button class="dropbtn">{{auth()->user()->username}}  </button>
                        </div>
                        <div class="dropdown-content">
                            <a href="{{Route('dashboard')}}">Dashboard</a>

                            <a href="#">
                                <form action="{{route('logout')}}" method="post" class="inline" >
                                @csrf
                                <button  >Logout</button>
                                </form></a>
                        </div>
                        </div>
                </li>

             @else
             <li> <a href="{{route('register')}}" class="p-3" >Register</a> </li>
            <li> <a href="{{route('login')}}" class="p-3" >Login</a> </li>

             @endif




    </nav>
    @yield('content')
</body>
</html>
