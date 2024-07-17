<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {	
    	$student_dataset = \App\Students::all();
    	return view('students.index',['student_dataset' => $student_dataset]);
    }

    public function create(Request $request)
    {
    	\App\Students::create($request->all());	
    	return redirect('/students')->with('success', 'New Student created successfully.');
    }

    public function edit($std_id)
    {
    	$students = \App\Students::find($std_id);
    	return view('students.edit', ['std' => $students]);
    }

    public function update(Request $request, $std_id)
    {
    	$students = \App\Students::find($std_id);
    	$students->update($request->all());
    	return redirect('/students')->with('update', 'Student updated successfully.');
    }

    public function delete($std_id)
    {
    	$students = \App\Students::find($std_id);
    	$students->delete($students);
    	return redirect('/students')->with('delete', 'Student has been deleted.');
    }
}
