<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="hello_form" method="POST">
@csrf
    
    <input type="text" name="check"  value=" {{Auth::user()->admin}}"  style="display: none;" >
    
    <button>เข้าสู่เมนู</button>
</form>
    
</body>
</html>