<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Home Page</title>
</head>
<body class="min-h-screen bg-gray-100 text-gray-600 py-6 flex-col justify-center sm:py-12">
    
    <div class="mt-4 text-center">
        <Span class="text-2xl font-semibold">Welcome!</Span>
        <div class="text-right mr-6">
            <a href="{{route('user.logout')}}" class="bg-red-400 text-white px-1 rounded-md hover:bg-red-500">Logout</a>
        </div>
        <div class="mt-4">Want to add a new movie?<a href="{{route('create.task')}}" class="text-yellow-500 hover:text-yellow-700"> Add</a></div>

        <div class="flex justify-center mt-2">
            <div class="mt-4 bg-white shadow-md rounded-lg text-left md:w-2/3">
                <div class="h-2 bg-yellow-400 rounded-t-md"></div>
                <table class="overflow-scroll w-full">
                    <thead>
                        <tr class="bg-white text-gray-600 uppercase text-sm leading-normal border-b border-yellow-200">
                            <th class="py-3 px-3 text-left">SLNo</th>
                            <th class="py-3 px-6 text-left">Movie name</th>
                            <th class="py-3 px-6 text-center">Description</th>
							<th class="py-3 px-6 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach($tasks as $task)
                        <tr class="border-b border-yellow-200 hover:bg-yellow-100">
                        
                            <td class="py-3 px-3 text-left ">{{ $task->id }}</td>
                            <td class="py-3 px-3 text-left ">{{ $task->question }}</td>
                            <td class="py-3 px-3 text-left ">{{ $task->description }}</td>
							
							<td class="py-3 text-center transform hover:scale-110">
								<span onclick="document.getElementById('d-u-{{ $task->id }}').submit()" class="material-icons cursor-pointer text-base bg-red-400 text-white px-1 rounded-md hover:bg-red-500">Delete</span>
								<form action="{{ route('task.destroy',$task->id) }}" method="post" id="d-u-{{ $task->id }}">
									@csrf
									@method('delete')
								</form>
							</td>
							<td class="py-3 px-3 text-center transform hover:text-blue-500 hover:scale-110">
								<span  class="material-icons cursor-pointer text-base bg-blue-400 text-white px-1 rounded-md hover:bg-blue-500"><a href={{"edit/".$task['id']}}>Edit</a></span>
							</td>
							
							
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>

        </div>
    </div>
    
</body>
</html>