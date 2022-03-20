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

        {{Auth::user()->name}}

            @foreach($students as $row )
                @foreach($courses as $course)
                    @foreach($departments as $department)
                        @foreach($facultys as $faculty)
                            <?php

                                $std_id = $row->std_id;
                                $std_fname = $row->std_fname;
                                $std_lname = $row->std_lname;
                                $std_username = $row->std_username;
                                $std_email = $row->std_email;

                                $std_course_id = $row->course_id;
                                $std_dept_id = $row->dept_id;
                                $std_faculty_id = $row->faculty_id;

                                $course_id = $course->course_id;
                                $course_name = $course->course_name;
                                $dept_id = $course->dept_id;
                                
                                $dept_id = $department->dept_id;
                                $dept_name = $department->dept_name;
                                $faculty_id = $department->faculty_id;

                                $faculty_id = $faculty->faculty_id;
                                $faculty_name = $faculty->faculty_name;

                                if(
                                    $std_course_id == $course_id AND
                                    $std_dept_id == $dept_id AND 
                                    $std_faculty_id == $faculty_id
                                )



                                
                                echo "รหัสนักศึกษา :";
                                echo "<input class='form-control' type='text' name='std_id' value='$std_id ' readonly>";
                                echo "ชื่อ-นามสกุล :";
                                echo "<input class='form-control' type='text' name='std_fullname' value='$std_fname  $std_lname' readonly>";
                                echo "ชื่อผู้ใช้งาน :";
                                echo "<input class='form-control' type='text' name='std_username' value='$std_username' readonly>";
                                echo "สาขา :";
                                echo "<input class='form-control' type='text' name='course_id' value='$course_name' readonly>";
                                echo "ภาควิชา :";
                                echo "<input class='form-control' type='text' name='dept_id' value='$dept_name' readonly>";
                                echo "คณะ :";
                                echo "<input class='form-control' type='text' name='faculty_id' value='$faculty_name' readonly>";
                                echo "อีเมล :";
                                echo "<input class='form-control' type='text' name='std_email' value='$std_email' readonly>";
                            ?>

                        @endforeach
                    @endforeach
                @endforeach
            @endforeach
        </div>
    </div>
    @stop
    @extends('footer')
</body>

</html>