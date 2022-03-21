<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-dark">
    @extends('layouts.app')
    @section('content')

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if(auth()->user()->is_admin == 1)
                        <!-- <a href="{{url('admin/routes')}}"> -->
                        Admin
                        @else
                        <div class=”panel-heading”>Normal User</div>
                        @endif

                        {{__('You are logged in!')}}

                    </div>
                </div>
            </div>
        </div>
    </div>
   

    @endsection
</body>

</html>