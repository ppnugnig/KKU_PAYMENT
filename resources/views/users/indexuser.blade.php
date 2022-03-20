<!DOCTYPE html>
<html lang="en">
<head>
    <title>ข้อมูลวันที่ชำระเงิน</title>
    <link rel="stylesheet" href="{{url('/css/style.css')}}">

</head>
<body class="bg-color">
@extends('schedules.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-white text-center">ข้อมูลการชำระเงิน</h2>
        </div>
    </div>
    
    <table class="table table-borderless" id="table-color">
        <tr class="text-center" id="head-border">
            <th>ประจำเดือน</th>
            <th>เริ่มวันที่</th>
            <th>สิ้นสุดวันที่</th>
        </tr>
        @foreach($schedules as $value)
        <tr class="text-center">
            <td>{{$value['month']}}</td>
            <td>{{$value['startdate']}}</td>
            <td>{{$value['enddate']}}</td>
        </tr>
        @endforeach
    </table>
    <a href="#" class="btn-right link-color">ชำระเงิน</a><p class="text-white btn-right">คลิกเพื่อชำระเงิน: </p>

@endsection
</body>
</html>
