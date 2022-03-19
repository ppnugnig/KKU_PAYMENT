<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{url('/css/style.css')}}">

    <title>ข้อมูลนักศึกษา</title>

</head>
<body class="bg-dark">
@extends('students.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-white text-center">ข้อมูลนักศึกษา</h2>
            <a href="{{route('students.create')}}" class="btn  my-3" id="btn-creat">+ สร้าง</a>
        </div>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <table class="table table-borderless" id="table-color">
        <tr class="text-center" id="head-border">
            <th width="150">รหัสนักศึกษา</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>อีเมล</th>
            <th width="150">ชื่อผู้ใช้</th>
            <th>คณะ</th>
            <th>ภาควิชา</th>
            <th>สาขา</th>
            <th width="200">การดำเนินการ</th>
        </tr>
        @foreach($students as $key => $value)
        <tr class="text-center">
            
            @foreach($courses as $course)

                @foreach($departments as $department)

                     @foreach($faculties as $facultie)


                        <?php

                       $std_id = $value->std_id;
                       $std_fname = $value->std_fname;
                       $std_lname =  $value->std_lname;
                       $std_email = $value->std_email;
                       $std_username =  $value->std_username;

                       $m_course_id = $value->course_id;
                       $m_dept_id = $value->dept_id;
                       $m_faculty_id = $value->faculty_id;

                        $course_id = $course->course_id;
                        $course_name = $course->course_name;
                        $f_dept_id = $course->dept_id;
                         
                        $dept_id = $department->dept_id;
                        $dept_name = $department->dept_name;
                        $f_faculty_id  = $department->faculty_id ;


                        $faculty_id = $facultie->faculty_id;
                        $faculty_name = $facultie->faculty_name;
                        

                        if(
                            
                        $m_course_id == $course_id 
                        and  $m_dept_id==$dept_id  
                        and  $m_faculty_id == $faculty_id 
                        )
                        {
                            
                            echo "<td> $std_id </td>";
                            echo "<td> $std_fname </td>";
                            echo "<td> $std_lname </td>";
                            echo "<td> $std_email </td>";
                            echo "<td> $std_username </td>";
                            echo "<td> $faculty_name </td>";
                            echo "<td> $dept_name </td>";
                            echo "<td> $course_name </td>";
                            
                            
                        }

                      ?>
            
                        @endforeach
                        @endforeach
                        @endforeach
            <td>
                <form action="{{route('students.destroy',$value->id)}}" method="post">
                    <a href="{{route('students.edit',$value->id)}}" class="btn btn-secondary">แก้ไข</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">ลบ</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $students->links() !!}

@endsection
</body>
</html>
