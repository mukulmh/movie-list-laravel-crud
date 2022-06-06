<?php

use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login Page</title>
</head>

<body class="min-h-screen bg-gray-100 text-gray-600 py-6 flex-col justify-center sm:py-12">
    <div class="mt-4 text-center">
        <Span class="text-2xl font-semibold">Login to your account!</Span>
        <div class="mt-4">Become a member.<a href="/" class="text-indigo-500 hover:text-indigo-700"> Register</a></div>
        <div class="flex justify-center mt-2">
            @if(Session::has('data'))
            <p>{{Session::get('data')}}</p>
            @endif
        </div>
        <div class="flex justify-center mt-2">
            <div class="mt-4 bg-white shadow-md rounded-lg text-left md:w-1/3">
                <div class="h-2 bg-indigo-400 rounded-t-md"></div>
                <form action="{{route('user.login')}}" method="post" class="px-8 py-6">
                    @csrf
                    <label class="block font-semibold">Username</label>
                    <input type="text" name="username" placeholder="Type username" required class="border w-full h-5 px-3 py-5 hover:outline-none focus:outline-none focus:ring-indigo-400 focus:ring-1 rounded-md">
                    <label class="block font-semibold">Password</label>
                    <input type="password" name="password" placeholder="Type password" class="border w-full h-5 px-3 py-5 hover:outline-none focus:outline-none focus:ring-indigo-400 focus:ring-1 rounded-md">
                    <div class="flex justify-between">
                        <div>
                        <input type="checkbox" class="mt-4">
                            <label >Keep me logged in</label>
                        </div>
                        <div>
                            <button type="submit" class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-md hover:bg-indigo-600">Login</button>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-end"><a href="{{route('pass.reset')}}" class="text-indigo-500 text-center hover:text-indigo-700">Forgot your username or  Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>