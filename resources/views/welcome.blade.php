<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="TopArea">
    <h2>Home</h2>
   <a href="/create"> <button  id=createAccBtn>Create Account</button></a>
</div>

@if(session('success'))
        <h2>{{ session('success')}}</h2>
@endif

<div class="">
    <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">ID</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Description</th>
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">File</th>
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($posts as $post)
                <tr class="odd:bg-white even:bg-gray-100">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$post->id}}  
</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->name}}  
</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->description}}  
</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->imageFile}}  
</td>
                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                </td>
                </tr>
                

                                @endforeach

            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>