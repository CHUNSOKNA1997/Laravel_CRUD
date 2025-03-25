<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-gray-900 text-white flex flex-col min-h-screen">
    <main class="w-full max-w-6xl mx-auto p-4 flex flex-col space-y-4">
        <h2 class="text-2xl font-semibold text-left">Employee's Info</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-400 bg-gray-800 rounded-lg">
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Age</th>
                        <th scope="col" class="px-6 py-3">Position</th>
                        <th scope="col" class="px-6 py-3">Salary</th>
                        <th scope="col" class="px-12 py-3 text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($employees->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center p-4 text-gray-400">No employees found</td>
                        </tr>
                    @else
                        @foreach ($employees as $employee)
                            <tr class="border-b border-gray-700 hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                    {{ $employee->id }}
                                </th>
                                <td class="px-6 py-4">{{ $employee->name }}</td>
                                <td class="px-6 py-4">{{ $employee->age }}</td>
                                <td class="px-6 py-4">{{ $employee->position }}</td>
                                <td class="px-6 py-4">{{ $employee->salary }}</td>
                                <td class="px-6 py-4 text-right space-x-2">
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="font-medium text-blue-500 hover:underline">Edit</a>
                                    <a href="{{ route('employees.delete', $employee->id) }}" class="font-medium text-red-500 hover:underline">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>