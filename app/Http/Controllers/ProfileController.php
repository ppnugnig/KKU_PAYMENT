<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function profile(Request $request){
        // $students = student::find($request->std_id);
        // $student -> std_fname = $request -> std_fname;
        // $student -> std_lname = $request -> std_lname;
        // $student -> std_id = $request -> std_id;
        // $student -> std_email = $request -> std_email;
        $students = student::all();
        return view('profile',compact('students'));
    }
}
