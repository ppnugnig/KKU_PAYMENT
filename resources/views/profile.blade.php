<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลส่วนตัว</title>
    <link rel="stylesheet" href="{{url('/css/font.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        #bg-orange {
            background-color: darkorange;
            border: none;
            width: 65%;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            border-radius: 5px;
            font-family: 'kanit', sans-serif;
        }
    </style>
</head>

<body class="bg-dark">
    @extends('navbar')

    @section('navbar')
    <div class="card-body mt-5" id="bg-orange">
        <h2 class="text-white text-center">ข้อมูลส่วนตัว</h2>
        <div class="mb-3">

           





         รหัสนักศึกษา :
         <input class="form-control" type="text" name='std_id' value=' {{Auth::user()->name}}' readonly>;
         ชื่อ-นามสกุล :
         <input class="form-control" type="text" name='std_fullname' value='{{Auth::user()->name}}' readonly>;
         ชื่อผู้ใช้งาน :
         <input class="form-control" type="text" name='std_username' value='{{Auth::user()->name}}' readonly>;
         สาขา :
         <input class="form-control" type="text" name='course_id' value='{{Auth::user()->name}}' readonly>;
         ภาควิชา :
         <input class="form-control" type="text" name='dept_id' value='{{Auth::user()->name}}' readonly>;
         คณะ :
         <input class="form-control" type="text" name='faculty_id' value='{{Auth::user()->name}}e' readonly>;
         อีเมล :
         <input class="form-contro" type="text" name='std_email' value='{{Auth::user()->name}}' readonly>;


        </div>
    </div>
    @stop
    @extends('footer')
</body>

</html>