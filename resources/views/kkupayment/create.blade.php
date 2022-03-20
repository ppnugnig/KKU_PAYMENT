<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>


    <style>
        td,
        th {
            text-align: center;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                    <div>
                            รวม : {{$amount_sum}} บาท
                            รอตรวจสอบ : {{$amount_sucing}} บาท
                            สำเร็จแล้ว :{{$amount_suc}} บาท
                            ไม่สำเร็จ :{{$amount_nosuc}} บาท

                        </div>

                        <td></td>
                        <table class="table table-bordered table-striped">

                            <thead>

                                <tr>
                                    <th valign='middle'>Student ID</th>
                                    <th valign='middle'>Date</th>
                                    <th valign='middle'>Time</th>
                                    <th valign='middle'>Amount</th>
                                    <th valign='middle'>Image</th>
                                    <th valign='middle'>status</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    @foreach ($kkupayments as $kkupayment)

                                    <th valign='middle' scope="row">{{ $kkupayment->std_id}}</th>
                                    <td valign='middle'>{{$kkupayment->date}}</td>
                                    <td valign='middle'>{{$kkupayment->time}}</td>
                                    <td valign='middle'>{{$kkupayment->amount}}</td>
                                    <td valign='middle'><img src="{{ 'payment/'.$kkupayment->file_image }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                                    <td valign='middle'>

                                        <form action="status" method="POST">
                                            @csrf
                                            <input style="display: none;" type="text" name="id" value="{{$kkupayment->id}}">
                                            <select name="status">
                                                <?php
                                                if ($kkupayment->status == 'รอตรวจสอบ') {
                                                    echo
                                                    "
                                                     <option selected  value='รอตรวจสอบ'>รอตรวจสอบ</option>
                                                     <option  value='สำเร็จ'>สำเร็จ</option>
                                                     <option value='ไม่สำเร็จ'>ไม่สำเร็จ</option>

                                                     ";
                                                } elseif ($kkupayment->status == 'สำเร็จ') {
                                                    echo
                                                    "
                                                    <option  value='รอตรวจสอบ'>รอตรวจสอบ</option>
                                                    <option selected  value='สำเร็จ'>สำเร็จ</option>
                                                    <option  value='ไม่สำเร็จ'>ไม่สำเร็จ</option>

                                                    ";
                                                } elseif ($kkupayment->status == 'ไม่สำเร็จ') {
                                                    echo
                                                    "
                                                    <option  value='รอตรวจสอบ'>รอตรวจสอบ</option>
                                                    <option  value='สำเร็จ'>สำเร็จ</option>
                                                    <option  selected  value='ไม่สำเร็จ'>ไม่สำเร็จ</option>

                                                    ";
                                                }

                                                ?>

                                            </select>


                                    <td valign='middle'>

                                        <button>บันทึก</button>
                                    </td>

                                    </form>

                                    </td>

                                 

                                </tr>
                              
                                @endforeach




                            </tbody>



                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>