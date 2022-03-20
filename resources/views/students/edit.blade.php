<!DOCTYPE html>
<html lang="en">
<head>
    <title>แก้ไขข้อมูลวันที่ชำระเงิน</title>
<link rel="stylesheet" href="{{url('/css/style.css')}}">

   
</head>
<body class="bg-dark">
@extends('students.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-white text-center">แก้ไขข้อมูล</h2>
            <a href="{{route('students.index')}}" class='btn my-3' id="btn-back">&loarr; กลับ</a>
        </div>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
    <strong>แย่จัง!</strong>
        กรุณากรอกข้อมูลให้ครบถ้วน<br><br>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('students.update',$student->id)}}" method="post" class="bg-form fs-5">
        @csrf
        @method('PUT')
        <div class="row form-center">
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>ชื่อ:</strong>
                    <input type="text" name="std_fname" class="form-control my-2" value="{{$student->std_fname}}" placeholder="กรอกชื่อ">
                    
                </div>
            </div>
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>นามสกุล:</strong>
                    <input type="text" name="std_lname" class="form-control my-2" value="{{$student->std_lname}}" placeholder="กรอกนามสกุล">
                    
                </div>
            </div>
           
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>รหัสนักศึกษา:</strong>
                    <input type="text" name="std_id" class="form-control my-2" value="{{$student->std_id}}" placeholder="กรอกรหัสนักศึกษา">
                </div>
            </div>
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>อีเมล:</strong>
                    <input type="email" name="std_email" class="form-control my-2" value="{{$student->std_email}}" placeholder="กรอกอีเมล">
                    
                </div>
            </div>
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>ชื่อผู้ใช้:</strong>
                    <input type="email" name="std_username" class="form-control my-2" value="{{$student->std_username}}" placeholder="กรอกชื่อผู้ใช้">
                    
                </div>
            </div>
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>รหัสผ่าน:</strong>
                    <input type="password" name="std_password" class="form-control my-2" value="{{$student->std_password}}" placeholder="กรอกรหัสผ่าน">
                    
                </div>
            </div>


            <div class="col-md-4 my-1">
                <div class="form-group">
                    <strong>คณะ:</strong>
                    <select name="faculty_id" class="form-control my-2">
                       
                    @foreach($faculties as $faculty)
                    <?php 
                            $m_faculty_id = $student->faculty_id;
                            $faculty_id = $faculty->faculty_id;
                            if($m_faculty_id==$faculty_id){
                                echo " <option selected value='{$faculty->faculty_id}'>{$faculty->faculty_name}</option>";
                            }
                            else{
                                echo " <option value='{$faculty->faculty_id}'>{$faculty->faculty_name}</option>";
                            }
                        ?>
                    @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4 my-1">
                <div class="form-group">
                    <strong>ภาควิชา:</strong>
                    <select name="dept_id" class="form-control my-2">
                       
                    @foreach($departments as $department)
                    <?php 
                            $m_dept_id = $student->dept_id;
                            $dept_id = $department->dept_id;
                            if($m_dept_id==$dept_id){
                                echo " <option selected value='{$department->dept_id}'>{$department->dept_name}</option>";
                            }
                            else{
                                echo " <option value='{$department->dept_id}'>{$department->dept_name}</option>";
                            }
                        ?>
                    @endforeach
                    </select>
                </div>
            </div>
            

            <div class="col-md-4 my-1">
                <div class="form-group">
                    <strong>สาขา:</strong>
                    <select name="course_id" class="form-control my-2">
                    @foreach($courses as $course)
                        <?php 
                            $m_course_id= $student->course_id;
                            $course_id = $course->course_id;
                            if($m_course_id==$course_id){
                                echo " <option selected value='{$course->course_id}'>{$course->course_name}</option>" ;
                            }
                            else{
                                echo " <option  value='{$course->course_id}'>{$course->course_name}</option>" ;
                            }
                        ?>
                        @endforeach
                    </select>
                </div>
            </div>


            
           
            <div class="col-md-12 my-3 ">
                <button type="submit" class="btn btn-right" id="btn-color">แก้ไขข้อมูล</button>
            </div>
        </div>
        </div>
    </form>
    </form>
@endsection
@extends('navbar')
</body>
</html>
