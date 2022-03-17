<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-dark">
    @extends('layouts.app')
    @section('content')

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if(auth()->user()->is_admin == 1)
                        <!-- <a href="{{url('admin/routes')}}"> -->
                        Admin
                        @else
                        <div class=”panel-heading”>Normal User</div>
                        @endif

                        {{__('You are logged in!')}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search  mt-2 d-flex justify-content-center align-items-center">
        <label style="color:white;">ค้นหารหัสนักศึกษา</label>
        <textarea name="search-id" style="width:580px; height:30px" class="m-2">ค้นหารหัสนักศึกษา</textarea>
        <button type="submit" class="m-2">ค้นหา</button>
    </div>
    <div class="h-100 d-flex justify-content-center align-items-center">

        <div class="card mt-2 m-2" style="max-width: auto; max-height:auto;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">กิจกรรม</h5>
                        <p class="card-text">ด้านที่ 1 การพัฒนาศักยภาพตนเอง</p>
                        <p class="card-text">ด้านที่ 2 การธำรงไว้ซึ่งสถาบันชาติ ศาสนา พระมหากษัตริย์ เสริมสร้างจิตสำนึกความภาคภูมิใจในมหาวิทยาลัยและคณะ</p>
                        <p class="card-text">ด้านที่ 3 การเสริมสร้างจิตอาสา และจิตสาธารณะ</p>
                        <p class="card-text">ด้านที่ 4 การสร้างคุณธรรมจริยธรรมและศีลธรรม</p>
                        <p class="card-text">ด้านที่ 5 การอนุรักษ์ศิลปวัฒนธรรมไทยและภูมิปัญญาท้องถิ่น</p>


                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-2 m-2" style="max-width: auto; max-height:auto;">
            <div class="row g-0">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">จำนวนเงินทั้งหมดที่เก็บได้</h5>
                    <p class="card-text">จำนวนเงินทั้งหมด บาท</p>
                    <p class="card-text">จำนวนนักศึกษาที่จ่ายทั้งหมด คน</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="card mt-2 m-2" style="max-width: auto; max-height:auto;">
            <div class="row g-0">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

    </div>

    @endsection
</body>

</html>