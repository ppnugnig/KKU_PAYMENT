<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{url('/css/style.css')}}">
    <title>แก้ไขข้อมูลวันที่ชำระเงิน</title>

</head>
<body class="bg-dark">
@extends('schedules.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-white text-center">แก้ไขข้อมูล</h2>
            <a href="{{route('schedules.index')}}" class='btn my-3' id="btn-back">&loarr; กลับ</a>
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
    <form action="{{route('schedules.update',$schedule->id)}}" method="post" class="bg-form fs-5">
        @csrf
        @method('PUT')
        <div class="row form-center">
            <div class="col-md-8 my-1">
                <div class="form-group" >
                    <strong>เดือน:</strong>
                    <input type="text" name="month" value="{{$schedule->month}}" class="form-control my-2" placeholder="กรุณากรอกเดือน">
                </div>
            </div>
            <div class="col-md-8 my-1">
                <div class="form-group">
                    <strong>เริ่มวันที่:</strong>
                    <input type="date" name="startdate" value="{{$schedule->startdate}}" class="form-control my-2">
                    
                </div>
            </div>
            <div class="col-md-8 my-1">
                <div class="form-group">
                    <strong>สิ้นสุดวันที่:</strong>
                    <input type="date" name="enddate" value="{{$schedule->enddate}}" class="form-control my-2">
                    
                </div>
            </div>
            <div class="col-md-8 my-3">
                <button type="submit" class="btn btn-right" id="btn-color">แก้ไขข้อมูล</button>
            </div>
        </div>
    </form>
    </form>
@endsection
</body>
</html>
