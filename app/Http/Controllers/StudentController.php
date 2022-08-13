<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('home');
    }

    public function store(Request $request){
        $student = new Student();
        $student->students_name = $request->name;
        $student->students_class = $request->class;
        $student->students_email = $request->email;
        $student->students_password = $request->password;
        $student->save();
    }

    public function readData(Request $request){
        $student = Student::all();
        return view('table',compact('student'));
    }

    public function editData($id){
        $student = Student::find($id);
        // echo '<pre>';
        // print_r($student->toArray());
        // exit;
        return view('edit')->with(compact('student'));
    }
    public function updateData(Request $request, $id){
        $student =Student::find($id);
        $student->students_name = $request->name;
        $student->students_class = $request->class;
        $student->students_email = $request->email;
        $student->students_password = $request->password;
        $student->save();
    }

    public function Delete($id){
        $student = Student::find($id)->delete();
        // $student = Student::where('students_id', $id);
        // if(!is_null($student)){
        //     $student->delete();
        // }
    }
}
