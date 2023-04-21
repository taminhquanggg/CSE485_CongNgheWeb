<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function addNewStudent() {
        
        $student_name = 'Ta Minh Quang';
        $student_email = 'quang@gmail.com';

        $data = array('student_name'=>$student_name, 'student_email'=>$student_email);
        DB::table('student')->insert($data);
        // $student = new Student();
        // $student->Student_name("linh");
        // $student->Student_email("ngglinh@gmail.com");
        // $student->Save();
    }

    public function getAllStudents() {
        $data = DB::select('SELECT * FROM `student`');
        return view('student', ['student'=>$data]);
    }
}
