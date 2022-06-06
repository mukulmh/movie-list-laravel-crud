<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Registration Page</title>
</head>
<body class="min-h-screen bg-gray-100 text-gray-600 py-6 flex-col justify-center sm:py-12">
    <div class="mt-4 text-center">
        <Span class="text-2xl font-semibold">Register to our website!</Span>
    </div>
    
    <div class="mt-4 text-center">
        Already a member?<a href="user_login" class="text-green-500 hover:text-green-600"> Login</a>
    </div>

    <div class="flex justify-center mt-5">
        
        <div class="mt-4 bg-white shadow-md rounded-lg text-left md:w-1/3 ">
        <div class="h-2 bg-green-400 rounded-t-md"></div>
            <form action="{{route('user.registration')}}" method="post" class="px-8 py-6">
                @csrf
                <label class="block font-semibold">First Name</label>
                <input type="text" name="first_name" placeholder="First Name" required class="border w-full h-5 px-3 py-5 hover:outline-none focus:outline-none focus:ring-green-400 focus:ring-1 rounded-md">
                <label class="block font-semibold">Last Name</label>
                <input type="text" name="last_name" placeholder="Last Name" required class="border w-full h-5 px-3 py-5 hover:outline-none focus:outline-none focus:ring-green-400 focus:ring-1 rounded-md">
                <label class="block font-semibold">Username</label>
                <input type="text" name="username" placeholder="Username" required class="border w-full h-5 px-3 py-5 hover:outline-none focus:outline-none focus:ring-green-400 focus:ring-1 rounded-md">
                <label class="block font-semibold">Password</label>
                <input type="password" name="password" placeholder="Password" required class="border w-full h-5 px-3 py-5 hover:outline-none focus:outline-none focus:ring-green-400 focus:ring-1 rounded-md">
                <div class="h-5 flex-auto mt-3">
                    <label >Choose a Role: </label>
                    <select >
                        <option selected disabled>Choose a user role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="mt-4 bg-green-500 text-white py-2 px-6 rounded-md hover:bg-green-600">Sign Up</button>
                </div>
                
            </form>
        </div>
    </div>
    
</body>
</html>
