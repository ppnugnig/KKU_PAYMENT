<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
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

<body class="bg-color">

@extends('navbar')

@section('navbar')



    <div class="container">
        <div class="row">
            <div class="col-md-12">>



                        <td></td>
                        <table class="table table-borderless " id="table-color">
                    
                       
                            <thead class="text-center" id="head-border">

                                <tr>
                                    <th valign='middle'>รหัสนักศึกษา</th>
                                    <th valign='middle'>วันที่</th>
                                    <th valign='middle'>เวลา</th>
                                    <th valign='middle'>จำนวนเงิน</th>
                                    
                                    <th valign='middle'>สถานะ</th>


                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <tr>

                                    @foreach ($kkupayments as $kkupayment)
                                  
                                     

                                    @if($kkupayment->std_id == Auth::user()->std )

                                    <th valign='middle' scope="row">{{ $kkupayment->std_id}}</th>
                                    <td valign='middle'>{{$kkupayment->date}}</td>
                                    <td valign='middle'>{{$kkupayment->time}}</td>
                                    <td valign='middle'>{{$kkupayment->amount}}</td>
                                    
                                    <td valign='middle'>


                                        <input style="display: none;" type="text" name="id" value="{{$kkupayment->id}}">
                                        <p>{{$kkupayment->status}}</p>

                                    </td>
                                    @endif

                                </tr>

                                @endforeach




                            </tbody>



                        </table>

                    </div>
                </div>
            </div>
      
        @stop

        @extends('footer')

</body>

</html>