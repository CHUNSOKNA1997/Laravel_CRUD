<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{   
    public function index()
    {
        $employees = Employee::all();
        return view('index', ['employees' => $employees]); 
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'position' => 'required|max:25',
            'salary' => 'required|numeric'
        ]);
        Employee::create($data);
        return redirect()->route('employee.index');
    }
}
