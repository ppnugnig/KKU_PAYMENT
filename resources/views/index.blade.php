<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="{{url('/css/index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="layou">
        <div class="row g-0">
            <div class="col bg-dark ps-5">
                <p class="text-kku">KKU</p>
                <p class="text-white text-paym">PAYMENT</p>
                <p class="text-white text-webssite ">เว็บไซต์ตรวจสอบสถานะการจ่ายเงินของนักศึกษามหาวิทยาลัยขอนแก่น</p>
                <a href="{{url('/login')}}"><button type="button" class="btn p-3" id="signin">คลิกเพื่อเข้าสู่ระบบ</button></a>
            </div>

            <div class="col-auto">
                <img class="imghome" src="{{url('/img/imghomepage.JPG')}}" alt="imghome">
            </div>
        </div>

    </div>

</body>

</html>