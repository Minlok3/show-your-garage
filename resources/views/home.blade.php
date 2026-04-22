<!DOCTYPE html>
<html lang="en">
<head>
<style>
    html{
        background-image: url('/images/garage-769792_1920.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        height: 950px;
        object-fit: none;
        filter: brightness(80%);
        background-color: black;
        box-shadow: inset 0 0 6em 6em #000;
        background-repeat: no-repeat;
    }
    .text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }
    .start{
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .button{
        text-decoration: none;
        background: linear-gradient(180deg, #2cf00a 40%, #64f569 100%);
        color: black;
        padding: 1em 3em;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 1.5em;
        border-radius: 1em;
        box-shadow: 0 0 30px 10px #26a62a;
        border: none;
    }
    .button:hover{
        cursor: pointer;
        background: linear-gradient(180deg, #2cf00a 70%, #64f569 100%);
        color: gray;
        padding: 1.1em 3.1em;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 1.5em;
        border-radius: 1.1em;
        box-shadow: 0 0 25px 10px #64f569;
        transition: box-shadow 500ms;
    }
    h1{
        padding-bottom: 20px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 100px;
        font-weight: lighter;
        text-shadow: 0 0 10px #26a62a;
        
    }
    h3{
        padding-bottom: 70px;
        font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 30px;
        font-weight: lighter;
        text-shadow: 0 0 10px #26a62a;
    }
    footer{
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 5px;
        background-color:black ;
        color: white;
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show your garage</title>
    @include('layouts.navbar')
</head>
<body>
    <div class="start">
        <h1>Show your garage</h1>
        <h3>Pokaż światu swój garaż</h1>
        @guest
        <a href="{{ route('register') }}" class="button">ZACZYNAMY</a>
        @endguest
        @auth
        <a href="{{ route('login') }}" class="button">ZACZYNAMY</a>
        @endauth
    </div>
    <footer>Show your garage</footer>
</body>
</html>