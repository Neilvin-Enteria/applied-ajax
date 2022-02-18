<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('app.students.index');
    }

    public function getAllStudents(){
    
    }

    public function registerStudent(Request $request){
        $studentData = ['student_name' => $request->fullStudentName, 'advisor_id' => $request->advisorID];
        Student::create($studentData);
		return response()->json([
			'status' => 200,
		]);
    }

    public function selectStudent(){

    }

    public function updateStudentRecord(){

    }

    public function archiveStudentRecord(){
        
    }

}
