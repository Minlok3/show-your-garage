<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html{
            background-image: url('/images/car-3504910_1280.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            height: 950px;
            object-fit: none;
            background-color: black;
            box-shadow: inset 0 0 6em 6em #000;
            background-repeat: no-repeat;
        }
        .pole{
            width: 50%;
            background-color: black;
            border-radius: 10px;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #26a62a;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 20px;
            box-shadow: 0 0 10px 5px #26a62a;
            padding: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @include('layouts.navbar')
</head>
<body>
    <div class="pole">
        {{ __("You're logged in!") }}
    </div>
</body>
</html>
    

