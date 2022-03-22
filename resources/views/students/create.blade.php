<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>เพิ่มข้อมูลนักศึกษา</title>
<link rel="stylesheet" href="{{url('/css/style.css')}}">

</head>
<body class="bg-color">
    @extends('students.layout')

@section('content')
<div class="row mt-3">
        <div class="col-md-12">
        <h2 class="text-white text-center">เพิ่มข้อมูลนักศึกษา</h2>
        <a href="{{ route('students.index') }}" class="btn my-3" id="btn-back">&loarr; กลับ</a>
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
    <form action="{{route('students.store')}}" method="post" class="bg-form fs-5">
        @csrf
        <div class="row form-center">
            
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>ชื่อ:</strong>
                    <input type="text" name="std_fname" class="form-control my-2" placeholder="กรอกชื่อ">
                    
                </div>
            </div>
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>นามสกุล:</strong>
                    <input type="text" name="std_lname" class="form-control my-2" placeholder="กรอกนามสกุล">
                    
                </div>
            </div>
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>รหัสนักศึกษา:</strong>
                    <input type="text" name="std_id" class="form-control my-2" placeholder="กรอกรหัสนักศึกษา">
                </div>
            </div>
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>อีเมล:</strong>
                    <input type="email" name="std_email" class="form-control my-2" placeholder="กรอกอีเมล">
                    
                </div>
            </div>
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>ชื่อผู้ใช้:</strong>
                    <input type="email" name="std_username" class="form-control my-2" placeholder="กรอกชื่อผู้ใช้">
                    
                </div>
            </div>
            <div class="col-md-6 my-1">
                <div class="form-group">
                    <strong>รหัสผ่าน:</strong>
                    <input type="password" name="std_password" class="form-control my-2" placeholder="กรอกรหัสผ่าน">
                    
                </div>
            </div>
            
            <div class="col-md-4 my-1">
                <div class="form-group">
                    <strong>คณะ:</strong>
                    <select name="faculty_id" class="form-control my-2">
                        @foreach($faculties as $data)
                        <option value="{{$data->faculty_id}}">{{$data->faculty_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4 my-1">
                <div class="form-group">
                    <strong>ภาควิชา:</strong>
                    <select name="dept_id" class="form-control my-2">
                        @foreach($departments as $data)
                        <option value="{{$data->dept_id}}">{{$data->dept_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4 my-1">
                <div class="form-group">
                    <strong>สาขา:</strong>
                    <select name="course_id" class="form-control my-2">
                        @foreach($courses as $data)
                        <option value="{{$data->course_id}}">{{$data->course_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
           
            
           
            <div class="col-md-12 my-3 ">
                <button type="submit" class="btn btn-right" id="btn-color">เพิ่มข้อมูล</button>
            </div>
        </div>
    </form>
@endsection
@extends('navadmin')
@extends('footer')
</body>
</html>
