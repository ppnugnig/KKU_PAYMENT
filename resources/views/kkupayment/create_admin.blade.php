<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <title>Document</title>


    <style>
        td,
        th {
            text-align: center;

        }
    </style>
</head>

<body class="bg-color">

@extends('navadmin')

@section('navadmin')

       
        

    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
    <h2 class="text-white text-center">ตรวจสอบการชำระเงิน</h2>
                
            <p class="text-white">  จำนวนเงินทั้งหมด: {{$amount_suc}}  บาท</p>
               
                        <table class="table table-borderless" id="table-color">
                  
                            <thead class="text-center" id="head-border">

                                <tr>
                                    <th valign='middle'>รหัสนักศึกษา</th>
                                    <th valign='middle'>วันที่</th>
                                    <th valign='middle'>เวลา</th>
                                    <th valign='middle'>จำนวนเงิน</th>
                                    <th valign='middle'>หลักฐานการโอน</th>
                                    <th valign='middle'>สถานะ</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <tr>

                                    @foreach ($kkupayments as $kkupayment)

                                    <th valign='middle' scope="row">{{ $kkupayment->std_id}}</th>
                                    <td valign='middle'>{{$kkupayment->date}}</td>
                                    <td valign='middle'>{{$kkupayment->time}}</td>
                                    <td valign='middle'>{{$kkupayment->amount}}</td>
                                    <td valign='middle'> <a href="{{ 'payment/'.$kkupayment->file_image }}">  <img src="{{ 'payment/'.$kkupayment->file_image }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset="">    </a>  </td>
                                    
                                   
                                    <td valign='middle'>

                                        <form action="status" method="POST" >
                                            @csrf
                                            <input style="display: none;" type="text" name="id" class="form-control" value="{{$kkupayment->id}}">
                                            <select name="status" class="form-control">
                                                <?php
                                                if ($kkupayment->status == 'รอตรวจสอบ') {
                                                    echo
                                                    "
                                                     <option selected  value='รอตรวจสอบ'>รอตรวจสอบ</option>
                                                     <option  value='จ่ายแล้ว' class = 'green' >จ่ายแล้ว</option>
                                                     <option value='ไม่สำเร็จ'>ไม่สำเร็จ</option>

                                                     ";
                                                } elseif ($kkupayment->status == 'จ่ายแล้ว') {
                                                    echo
                                                    "
                                                    <option  value='รอตรวจสอบ'>รอตรวจสอบ</option>
                                                    <option selected  value='จ่ายแล้ว'>จ่ายแล้ว</option>
                                                    <option  value='ไม่สำเร็จ'>ไม่สำเร็จ</option>

                                                    ";
                                                } elseif ($kkupayment->status == 'ไม่สำเร็จ') {
                                                    echo
                                                    "
                                                    <option  value='รอตรวจสอบ'>รอตรวจสอบ</option>
                                                    <option  value='จ่ายแล้ว'>จ่ายแล้ว</option>
                                                    <option  selected  value='ไม่สำเร็จ'>ไม่สำเร็จ</option>

                                                    ";
                                                }

                                                ?>

                                            </select>


                                    <td valign='middle'>

                                        <button class="btn" id="btn-color">บันทึก</button>
                                    </td>

                                    </form>

                                    </td>

                                 

                                </tr>
                              
                                @endforeach




                            </tbody>



                        </table>

                        <div>
                           
                            จ่ายสำเร็จแล้ว :{{$amount_suc}} บาท
                            

                        </div>
                    </div>
                </div>
            </div>
    


    @stop

@extends('footer')

    
</body>

</html>