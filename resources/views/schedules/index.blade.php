<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{url('/css/style.css')}}">

    <title>ข้อมูลวันที่ชำระเงิน</title>
</head>
<body class="bg-color">
@extends('schedules.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-white text-center">ข้อมูลการชำระเงิน</h2>
            <a href="{{route('schedules.create')}}" class="btn my-3" id="btn-creat">+ สร้าง</a>
        </div>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <table class="table table-borderless" id="table-color">
        <tr class="text-center" id="head-border">
            <th>ประจำเดือน</th>
            <th>เริ่มวันที่</th>
            <th>สิ้นสุดวันที่</th>
            <th width="300">การดำเนินการ</th>
        </tr>
        @foreach($data as $key => $value)
        <tr class="text-center">
            <td>{{$value->month}}</td>
            <td>{{$value->startdate}}</td>
            <td>{{$value->enddate}}</td>
            <td>
                <form action="{{route('schedules.destroy',$value->id)}}" method="post">
                    <a href="{{route('schedules.edit',$value->id)}}" class="btn btn-secondary">แก้ไข</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">ลบ</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $data->links() !!}

@endsection
@extends('navbar')
@extends('footer')
</body>
</html>
