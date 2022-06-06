<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Reset Password</title>
</head>
<body class="min-h-screen bg-gray-100 text-gray-600 py-6 flex-col justify-center sm:py-12">
    
    <div class="mt-4 text-center">
        <Span class="text-2xl font-semibold">Hey there!</Span>
        <div class="text-right mr-6">
            <a href="{{route('user.login.page')}}" class="bg-red-400 text-white px-1 rounded-md hover:bg-red-500">Login</a>
        </div>
        <div class="mt-4">Forgot your password? Try to remeber and then login! Password reset feature is not available at this moment.</div>
        
    </div>
    
</body>
</html>