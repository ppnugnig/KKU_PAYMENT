<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{url('/css/style.css')}}">
    
    <title>เพิ่มข้อมูลวันที่ชำระเงิน</title>
    <style>
        .bg-form{
            background-color: rgb(255,140,0);
            border-radius: 10px;
        }
        .form-center{
            display: block;
            justify-content: center;
            padding: 10px;
        }
        .btn-right{
            float: right;

        }
    </style>
</head>
<body class="bg-dark">
    @extends('schedules.layout')

@section('content')
<div class="row mt-5">
        <div class="col-md-12">
        <h2 class="text-white text-center">เพิ่มข้อมูลการชำระเงิน</h2>
        <a href="{{ route('schedules.index') }}" class="btn btn-primary my-3">&loarr; กลับ</a>
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
                <button type="submit" class="btn btn-success btn-right" >เพิ่มข้อมูล</button>
            </div>
        </div>
    </form>
@endsection
</body>
</html>
