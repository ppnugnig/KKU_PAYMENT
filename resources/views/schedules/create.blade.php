<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{url('/css/style.css')}}">
    
    <title>เพิ่มข้อมูลวันที่ชำระเงิน</title>
</head>
<body class="bg-color">
    @extends('schedules.layout')

@section('content')
<div class="row mt-3">
        <div class="col-md-12">
        <h2 class="text-white text-center">เพิ่มข้อมูลการชำระเงิน</h2>
        <a href="{{ route('schedules.index') }}" class="btn my-3" id="btn-back">&loarr; กลับ</a>
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
    <form action="{{route('schedules.store')}}" method="post" class="bg-form fs-5">
        @csrf
        <div class="row form-center">
            <div class="col-md-8 my-1">
                <div class="form-group">
                    <strong>เดือน:</strong>
                    <input type="text" name="month" class="form-control my-2" placeholder="กรุณากรอกเดือน">
                </div>
            </div>
            <div class="col-md-8 my-1">
                <div class="form-group">
                    <strong>เริ่มวันที่:</strong>
                    <input type="date" name="startdate" class="form-control my-2">
                    
                </div>
            </div>
            <div class="col-md-8 my-1">
                <div class="form-group">
                    <strong>สิ้นสุดวันที่:</strong>
                    <input type="date" name="enddate" class="form-control my-2">
                    
                </div>
            </div>
            
            <div class="col-md-8 my-3 ">
                <button type="submit" class="btn btn-right" id="btn-color">เพิ่มข้อมูล</button>
            </div>
        </div>
    </form>
@endsection
@extends('navadmin')
@extends('footer')
</body>
</html>
