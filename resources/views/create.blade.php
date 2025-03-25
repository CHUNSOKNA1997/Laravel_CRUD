<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>CREATE</title>
</head>
<body class="bg-gray-900 text-white">
    <main class="h-screen w-full flex flex-col justify-center items-center gap-4">
        <h2 class="uppercase text-3xl font-semibold">Create Employee</h2>
        
        <form action="{{route('employee.store')}}" method="POST" class="w-md md:mx-auto p-4">
            @csrf
            @method('POST')

            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-white">Employee's Name</label>
                <input type="text" name="name" class="shadow-xs bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:outline-none block w-full p-2.5 placeholder-gray-400" required />
            </div>
        
            <div class="mb-5">
                <label for="age" class="block mb-2 text-sm font-medium text-white">Employee's Age</label>
                <input type="text" name="age" class="shadow-xs bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:outline-none block w-full p-2.5 placeholder-gray-400" required />
            </div>
            
            <div class="mb-5">
                <label for="position" class="block mb-2 text-sm font-medium text-white">Employee's Position</label>
                <input type="text" name="position" class="shadow-xs bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:outline-none block w-full p-2.5 placeholder-gray-400" required />
            </div>

            <div class="mb-5">
                <label for="salary" class="block mb-2 text-sm font-medium text-white">Employee's Salary</label>
                <input type="text" name="salary" class="shadow-xs bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:outline-none block w-full p-2.5 placeholder-gray-400" required />
            </div>
            
            <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 hover:cursor-pointer font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full">Create</button>
        </form>
    </main>
</body>
</html>
