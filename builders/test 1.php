<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container__body{
            background: red;
            right: 0;
            top: 0;
            height:100%;
            width: 80%;
            position: absolute;
        }
        .container__aside{
            background: blue;
            left: 0;
            top: 0;
            height:100%;
            width: 20%;
            position: absolute;
        }
        .body{
            height: 100vh;
            overflow-y: hidden;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="container__aside">

        </div>
        <div class="container__body">
            <p>lul</p>
        </div>
    </div>
</body>
</html>