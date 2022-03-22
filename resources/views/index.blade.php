<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="{{url('/css/index.css')}}">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-color">
    <div class="layou">
        <div class="row g-0">
            <div class="col ps-5">
                <p class="text-kku">KKU</p>
                <p class="text-white text-paym">PAYMENT</p>
                <p class="text-white text-webssite ">เว็บไซต์ตรวจสอบสถานะการจ่ายเงินของนักศึกษามหาวิทยาลัยขอนแก่น</p>

                <p class="text-white text-webssite ">ยินดีต้อนรับคุณ {{Auth::user()->name}} {{Auth::user()->lname}} </p>
                <form action="hello_form" method="POST">
                    @csrf

                    <input type="text" name="check" value=" {{Auth::user()->admin}}" style="display: none;">

                    <button   class="btn p-3" id="signin">เข้าสู่เว็บไซต์</button>
                </form>


            
            </div>

            <div class="col-auto">
                <img class="imghome" src="{{url('/img/imghomepage.JPG')}}" alt="imghome">
            </div>
        </div>

    </div>

</body>

</html>