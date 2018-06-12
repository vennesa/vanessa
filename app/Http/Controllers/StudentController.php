<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;

class StudentController extends Controller
{
   public function show()
    {
    	$students= Student::all();
    	return view ('laurret.all_students',['students'=>$students]);
    }
    

    public function store(Request $req)
    {
     $validateData = $req->validate([
     	'student_id'=>'required|unique:students|max:255',
        'name'=>'required',
     	 'year'=>'required',
        'course'=>'required'

		]);

		$student_id = $req->input('student_id');
		$name=$req->input('name');
		$course=$req->input('course');
		$year=$req->input('year');

		$data = array('student_id' =>$student_id,'name'=>$name,'year'=>$year,'course'=>$course );

		DB::table('students')->insert($data);

		echo "<script>alert('successfully registered student')</script>";
		return view('laurret.create');

	}
}