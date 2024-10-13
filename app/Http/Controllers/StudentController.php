<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'age'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'number'=>'required',
            'email'=>'required',
        ]);
        $newStudent = Student::create($data);
        return redirect(route('student.index'));
        
    }
    public function index(){
        $students = Student::all();
        return view ('students.index',['students'=>$students]);
    }
}
