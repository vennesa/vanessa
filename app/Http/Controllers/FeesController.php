<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Fees;
use App\Student;

class FeesController extends Controller
{
     public function show($id)
    {
        $fees = fees::find($id);
        $student_id = $id;
        return view('laurret.fees', ['fees' => $fees, 'student_id' => $student_id]); 
    }

    public function writefee(Request $req)
    {
         $validateData = $req->validate([
     	'student_id'=>'required|unique:fees|max:255','total'=>'required',
     	 'paid'=>'required',
        

		]);

         
         	
         
		$student_id = $req->input('student_id');
		$total=$req->input('total');
		$paid=$req->input('paid');

		$data = array('student_id' =>$student_id,'total'=>$total,'paid'=>$paid);

		DB::table('fees')->insert($data);

		echo "<script>alert('successful')</script>";
		return view('laurret.fees');

    }
   
	public function search(Request $req)
	{
		$student_id =$req->input('student_id');

		$fee = Fees::where('student_id',$student_id)->get();

		$sum = $fee->sum('paid');

		return view('laurret.viewfees',compact('fee'),compact('sum'));
	}
	public function allfees()
	{
		$fee = Fees::all();
		$sum = $fee->sum('paid');

		return view('laurret.all_fees',compact('fee'),compact('sum'));
	}

}
