<!DOCTYPE html>
<html lang="en">
<head>
    <title>ข้อมูลวันที่ชำระเงิน</title>
    <style>
        .btn-right{
            float: right;

        }
        .link-color{
            color: darkorange;
            margin-left: 5px;
        }
        .link-color:hover{
            color: white;
        }
        .text-color{
            color: darkorange;
        }
    </style>
</head>
<body class="bg-dark">
@extends('schedules.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-white text-center">ข้อมูลการชำระเงิน</h2>
        </div>
    </div>
    
    <table class="table table-md">
        <tr class="text-center  text-color">
            <th>ประจำเดือน</th>
            <th>เริ่มวันที่</th>
            <th>สิ้นสุดวันที่</th>
        </tr>
        @foreach($schedules as $value)
        <tr class="text-center text-white">
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
