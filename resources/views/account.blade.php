<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT</title>
    <link rel="stylesheet" href="{{url('/css/account.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="bg-color">

@extends('navbar')

@section('navbar')
<div class="card-body mt-5">
    <div class="alert alert-warning" id="bg-orange">
        <div class="row d-flex align-items-center">
            <div class="col qrcode">
                <img class="imgqrcod" src="{{url('/img/qrcode.png')}}" alt="imgqrcod">
            </div>
            <div class="col-auto ">หรือ</div>
            <div class="col align-middle ps-5">
                <p>ชื่อธนาคาร: ไทยพาณิชย์</p>
                <p>ชื่อบัญชี: เทคโนโลยีสารสนเทศ</p>
                <p>เลขบัญชี: 123-456789-0</p>
                <p>Promtpay: 000-0000-000</p>
            </div>
        </div>
    </div>
    </div>
@stop
@extends('footer')
</body>

</html>