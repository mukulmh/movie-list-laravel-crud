<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Create</title>
</head>
<body class="min-h-screen bg-gray-100 text-gray-600 py-6 flex-col justify-center sm:py-12">
    <div class="mt-4 text-center">
        <Span class="text-2xl font-semibold">Add new movies in your list!</Span>
        <div class="text-left ml-6">
                <a href="{{route('home')}}" class="bg-blue-500 text-white px-1 rounded-md hover:bg-blue-600">Back</a>
        </div>

        <div class="flex justify-center mt-2">
            @if(Session::has('data'))
            <p>{{Session::get('data')}}</p>
            @endif
        </div>

        <div class="flex justify-center mt-2">
            <div class="mt-4 bg-white shadow-md rounded-lg text-left md:w-1/3">
                <div class="h-2 bg-blue-400 rounded-t-md"></div>
                <form action="{{route('add.task')}}" method="post" class="px-8 py-6">
                    @csrf
                    <label class="block font-semibold">Movie name</label>
                    <input type="text" name="question" placeholder="Write down the name" required class="border w-full h-5 px-3 py-5 hover:outline-none focus:outline-none focus:ring-blue-400 focus:ring-1 rounded-md">
                    <label class="block font-semibold">Description</label>
                    <textarea name="description" placeholder="Type description" rows="3" required class="border w-full px-3 py-5 hover:outline-none  focus:outline-none focus:ring-blue-400 focus:ring-1 rounded-md"></textarea>
                    <div class="flex justify-center">
                        <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>