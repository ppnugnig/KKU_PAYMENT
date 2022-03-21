<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{url('/css/font.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        *{
            font-family: 'kanit';
        }
        .ttorange {
            color: darkorange;
        }

        .imgprofile {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .bg-color{
            background-color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-color">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#home"> <span class="ttorange">KKU </span>PAYMENT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ตารางการชำระเงินประจำเดือน
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="account">ช่องทางการชำระเงิน</a></li>
                            <li><a class="dropdown-item" href="add-kkupayment">แจ้งชำระเงิน</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="activity">กิจกรรม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kkupayments_user">ตรวจสอบสถานะการชำระเงิน</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-scroll me-4" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown d-flex">
                        <a class="nav-link p-2" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <span class="m-2">  {{Auth::user()->name}}</span> <img class="imgprofile " src="{{url('/img/profile.png')}}" alt="imgprofile">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="profile">ข้อมูลส่วนตัว</a></li>
                            <li><a class="dropdown-item" href="#">ออกจากระบบ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('navbar')
</body>

</html>