<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\City;
use App\Models\State;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }
    public function store(Request $request)
    {
            // Check if the city already exists in the database
        $city = City::where('name', $request->city)->first();
        if (!$city) {
            
            $city = new City;
            $city->name = $request->city;
            $city->save();
        }

        // Check if the state already exists in the database
        $state = State::where('name', $request->state)->first();
        if (!$state) {
            
            $state = new State;
            $state->name = $request->state;
            $state->save();
        }

        
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->mobile = $request->mobile;
        $employee->city_id = $city->id;
        $employee->state_id = $state->id;
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee created successfully!');
    }

}
