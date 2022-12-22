<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    public function index() {
        $students = StudentModel::where('active', 1)->get();
        return view('students.list', compact('students'));
    }

    public function addForm() {
        return view('students.add');
    }

    public function add(Request $request) {
        $studentid = $request->input('studentid');

        $exists = StudentModel::find($studentid);

        if ($exists) {
            return redirect('/students/add')->with('error', "Student ID already exists");
        } 

        $newStudent = new StudentModel;
        $newStudent->studentid = $studentid;
        $newStudent->firstname = $request->input('firstname');
        $newStudent->middlename = $request->input('middlename');
        $newStudent->lastname = $request->input('lastname');
        $newStudent->program = $request->input('program');
        $newStudent->yearlevel = $request->input('yearlevel');
        $newStudent->voterskey = time();
        $newStudent->save(); 
        return redirect('/students/add')->with('success', 'Student added successfully');   
    }

    public function updateForm($studentid) {
        $student = StudentModel::where('studentid', $studentid)->first();
        return view('students.update', compact('student'));
    }

    public function update(Request $request) {
        $student = StudentModel::where('studentid', $request->input('studentid'))->first();
        $student->firstname = $request->input('firstname');
        $student->middlename = $request->input('middlename');
        $student->lastname = $request->input('lastname');
        $student->program = $request->input('program');
        $student->yearlevel = $request->input('yearlevel');
        $student->save();
        return redirect('/students')->with('success', 'Student updated successfully');
    }

    public function delete($studentid) {
        $student = StudentModel::where('studentid', $studentid)->first();
        $student->active = 0;
        $student->save();
        return redirect('/students')->with('success', 'Student deleted successfully');
    }
}
