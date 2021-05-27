<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class TestController extends Controller
{
    public function home(){

        $employees = Employee::all();

        return view('pages.home', compact('employees'));
    }

    public function show($id){

        $employee = Employee::FindOrFail($id);

        return view('pages.show', compact('employee'));
    }

    public function edit($id){

        $employee = Employee::FindOrFail($id);

        return view('pages.edit', compact('employee'));
    }

    public function update(Request $request, $id){


        $valiData = $request -> validate ([

            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|integer',
            'ral' => 'nullable|integer'

        ]);

        $employee = Employee::FindOrFail($id);

        $employee -> update($valiData);

        return redirect() -> route('home');
    }

    // ---------------Creating e mew Employee-------
    public function newEmployee(){

        return view('pages.create');
    }

    public function addEmployee(Request $request){

        $validata = $request -> validate([

            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|integer',
            'ral' => 'nullable|integer'

        ]);

        $employee = Employee::create($validata);

        return redirect() -> route('home');
    }

    // -------------------------------------------------

    public function destroy($id){

        $employee = Employee::FindOrFail($id);

        $employee -> delete();

        return redirect() -> route('home');
    }
}
