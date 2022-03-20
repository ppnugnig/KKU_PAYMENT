<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function Std_profile(){
        $students = Student::all();
        $courses = Course::all();
        $departments = Department::all();
        $facultys = Faculty::all();
        return view('profile',compact('students','courses','departments','facultys'));
    }
}
