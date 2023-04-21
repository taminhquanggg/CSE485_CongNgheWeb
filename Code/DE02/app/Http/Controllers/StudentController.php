<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function get_all_student() {
        $students = Student::all();
        return view("student_manage", ['students' => $students]);
    }

    public function get_student_by_id($id) {
        $student = Student::findOrFail($id);
        return view("student_edit", ['student' => $student]);
    }

    public function edit(Request $request, $id) {
        $student = Student::find($id);
        $student->fullname = $request->txtFullname;
        $student->birthday = $request->txtBirthday;
        $student->address = $request->txtAddress;
        $student->save();
        return redirect('/');
    }
}
