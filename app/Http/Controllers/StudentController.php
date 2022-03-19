<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::latest()->paginate(10);
        $courses = Course::all();
        $departments = Department::all();
        $faculties = Faculty::all();
        return view('students.index', compact('students','courses','departments','faculties'))
                ->with('i', (request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $new_std = new Student;
        $courses = Course::all();
        $departments = Department::all();
        $faculties = Faculty::all();
        return view('students.create',compact('courses','departments','faculties'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        

        $request->validate([
            'std_id' => 'required',
            'std_fname' => 'required',
            'std_lname' => 'required',
            'std_email' => 'required',
            'std_username' => 'required',
            'std_password' => 'required',
            'course_id' => 'required',
            'dept_id' => 'required',
            'faculty_id' => 'required'
        ]);
        Student::create($request->all());
       
        return redirect()->route('students.index')
                        ->with('success','เพิ่มข้อมูลสำเร็จแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student,Course $courses, Department $departments, Faculty $faculties)
    {
        //

        $courses = Course::all();
        $departments = Department::all();
        $faculties = Faculty::all();
        return view('students.edit', compact('student','courses','departments','faculties'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student ,Course $courses, Department $departments, Faculty $faculties)
    {
        //
        $request->validate([

            'std_id' => 'required',
            'std_fname' => 'required',
            'std_lname' => 'required',
            'std_email' => 'required',
            'std_username' => 'required',
            'std_password' => 'required',
            'course_id' => 'required',
            'dept_id' => 'required',
            'faculty_id' => 'required'
        ]);
        $student->update($request->all());
        return redirect()->route('students.index')
                        ->with('success','แก้ไขข้อมูลสำเร็จแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */

    public function destroy(Student $student)
    {
        //
        $student -> delete();
        return redirect()->route('students.index')
                        ->with('success', 'ลบข้อมูลสำเร็จแล้ว');
    }

    
}
