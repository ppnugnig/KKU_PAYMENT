<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
</head>

<body class="bg-color">
    @extends('navbar')
    @section('navbar')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h2 class="text-white text-center">แจ้งชำระเงิน</h2>


                        <form action="{{ url('add-kkupayment') }}" method="POST" enctype="multipart/form-data" class="bg-form fs-5">
                            @csrf
                            <div class="row form-center">
                            <div class="col-md-6  my-1">
                                <div class="form-group">
                                    <label for="">รหัสนักศึกษา</label>
                                <input type="text" name="std_id" class="form-control" require>
                                </div>
                            </div>







                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="">วัน/เดือน/ปี ที่ชำระ</label>
                                <input type="date" name="date" class="form-control" require>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">เวลาที่ชำระ</label>
                                <input type="time" name="time" class="form-control" require>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">จำนวนเงิน</label>
                                <input type="text" name="amount" class="form-control" require>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">สลิปการโอนเงิน</label>
                                <input type="file" name="file_image" class="form-control" require>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Image</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
@extends('footer')
</body>

</html>