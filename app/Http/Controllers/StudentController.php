<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();
class StudentController extends Controller
{
    public function student_login(Request $request){
           $email = $request->student_email;
           $pass  = $request->student_pass;
           $result = DB::table('student_tbl')->where('student_email',$email)->where('student_pass',$pass)->first();

           // echo"<pre>";
           //   print_r($result);
           //  echo "</pre>";

        if ($result) {
           
             Session::put('student_email',$request->student_email);
             Session::put('student_pass',$request->student_pass);
           return Redirect::to('student_dashboard');

            }    

         else{
           Session::put('message','mail or password Invalid');
           return Redirect::to('/');
        }
}

 public function studentdashboard(){

 	return view('student.student_dashboard');
 }


 //student logout part here ================================

 public function studentlogout(){

      Session::put('student_email',null);
      Session::put('student_pass',null);
      return Redirect::to('/');

    }
 
}