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

<body class="bg-color">
    @extends('navbar')

    @section('navbar')
    <div class="card-body mt-5" id="bg-orange">
        <h2 class="text-white text-center">ข้อมูลส่วนตัว</h2>
        <div class="mb-3">


            @foreach($students as $key => $value)
            @foreach($courses as $course)

            @foreach($departments as $department)

            @foreach($facultys as $facultie)


            @if(
            $value->course_id==$course->course_id
            and
            $value->dept_id==$department->dept_id
            and
            $value->faculty_id==$facultie->faculty_id
            and 
            $value->std_id==Auth::user()->std 
            
           

            )
         


            รหัสนักศึกษา :
            <input class="form-control" type="text" name='std_id' value=' {{Auth::user()->std}}' readonly>
            ชื่อ-นามสกุล :
            <input class="form-control" type="text" name='std_fullname' value='{{Auth::user()->name}} {{Auth::user()->lname}}' readonly>
            สาขา 
            <input class='form-control' type='text' name='course_id' value='{{$course->course_name}}' readonly>
            ภาควิชา :
            <input class='form-control' type='text' name='dept_id' value='{{$department->dept_name}}' readonly>
            คณะ :
            <input class='form-control' type='text' name='faculty_id' value='{{$facultie->faculty_name}}' readonly>

            @endif

            

            @endforeach
            @endforeach
            @endforeach
            @endforeach





        </div>
        @stop
        @extends('footer')
</body>

</html>