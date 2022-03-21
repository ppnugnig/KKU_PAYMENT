<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    </style>
</head>

<body>
    <div style="background-color: wheat;">
  
        <h1>เพิ่มกิจกรรม</h1>
        <form action="create_activity" method="POST">
        @csrf
            
            ชื่อกิจกรรม<input type="text" name="activity">  <br>
            จำนวนค่าใช้จ่าย <input type="text" name="amount">

            <button>สร้าง</button>
        </form>
    </div>


    
    



    <div class="container my-5">
        <h1 class="text-center" id="title-activity">มีกิจกรรมทั้งหมด{{$count_activity}}</h1>
        <div class="row">

            @foreach($activitys as $activity)
            <div class="col-sm">
                <div class="alert" id="activity" role="alert">
                   
                    <hr id="wht">
                    <p>ชื่อกิจกรรม :{{$activity->activity}} </p><br>

                   <p>จำนวนเงินที่ใช้ {{$activity->amount}} บาท</p>
                </div>
            </div>

            @endforeach

            <h3>เงินเหลือ  {{$total}}</h3>
        

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>