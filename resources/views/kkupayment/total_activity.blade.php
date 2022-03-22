<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

        .edit_bt{
         
            text-align: center;
        }


    </style>
</head>

<body class="bg-color">
    @extends('navadmin')
    @section('navadmin')
    <div>
  
        
        <form action="create_activity" method="POST" class="form-group">
        @csrf
            <div class="row justify-content-center">
            <h2 class="text-white text-center">เพิ่มข้อมูลค่าใช้จ่าย</h2>

                <div class="col-md-2">
                    <label class="text-white">ชื่อกิจกรรม</label> 
                     <input type="text" name="activity" class="form-control">
                </div>

                <div class="col-md-2">
                <label class="text-white">จำนวนค่าใช้จ่าย</label> <input type="text" name="amount" class="form-control">
                </div>
               
                <div class="col-md-12 edit_bt" >
                    <br>
                <button class="btn" id="btn-creat" >สร้าง</button>
                </div>
            </div>
           
        </form>
    </div>


    
    



    <div class="container my-5">
        <h2 class="text-center" id="title-activity">มีกิจกรรมทั้งหมด  {{$count_activity}}  กิจกรรม | เงินคงเหลือ  {{$total}}  บาท</h2>
        <div class="card-row">

            @foreach($activitys as $activity)
            <div class="card-body">
                <div class="alert" id="activity" role="alert">
                   
                    
                    <p>ชื่อกิจกรรม :{{$activity->activity}} </p>
                    <hr id="wht">
                   <p>จำนวนเงินที่ใช้ {{$activity->amount}} บาท</p>
                </div>
            </div>

            @endforeach
        </div>
    
          
            @endsection
            @extends('footer')

</body>

</html>