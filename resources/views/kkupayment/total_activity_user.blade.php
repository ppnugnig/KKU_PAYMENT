<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">

    <title>Document</title>
    <style>
        body {
            background-color: black;
        }

        #activity {
            border: 1px solid darkorange;
            border-radius: 10px;
            background-color: darkorange;
        }

        #activityy {
            border: 1px solid white;
            border-radius: 10px;
            background-color: white;
        }

        #title-activity {
            color: white;
            margin: 20px 0;
            font-size: 18px;
        }

        #org {
            border: 1px solid darkorange;
            background-color: darkorange;
        }

        #wht {
            border: 1px solid white;
            background-color: white;
        }
    </style>
</head>

<body class="bg-color">
   
   @extends('navbar')
   @section('navbar')
    <div class="container my-5">
    <h2 class="text-white text-center">ข้อมูลค่าใช้จ่าย</h2>

    <h2 class="text-center" id="title-activity">มีกิจกรรมทั้งหมด  {{$count_activity}}  กิจกรรม | เงินคงเหลือ  {{$total}}  บาท</h2>

        <div class="row">

            @foreach($activitys as $activity)
            <div class="col-sm">
                <div class="alert" id="activity" role="alert">
                   <p>ชื่อกิจกรรม :{{$activity->activity}} </p>
                    <hr id="wht">
                    

                   <p>จำนวนเงินที่ใช้ {{$activity->amount}} บาท</p>
                </div>
            </div>

            @endforeach

    
        @endsection
        @extends('footer')

</body>

</html>