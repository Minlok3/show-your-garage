<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('layouts.navbar')
    <title>Garaż</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
    <style>
        body{
            background-image: url('/images/automobile-4955002_1280.jpg');
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
        .title{
            text-align: center;
            color: #26a62a;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-shadow: 0 0 15px #26a62a;
            width: 80%;
            background-color: black;
            border-radius: 10px;
            box-shadow: 0 0 10px 5px #26a62a;
        }
        .container{
            background-color: transparent;
            max-width: 900px;
            margin: 0 auto;
            padding-top: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
        }   
        .footer-button{
            background-color: transparent;
            float: right;
            margin-top: 3%;
        }
        .pole{
            width: 80%;
            background-color: black;
            border-radius: 10px;
            color: #26a62a;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 20px;
            text-shadow: 0 0 15px #26a62a;
            box-shadow: 0 0 10px 5px #26a62a;
            padding: 50px;
            position: relative;
            margin-bottom: 15px;
        }
        a{
            text-decoration: none;
            color: red;
        }
        a:hover{
            text-decoration: none;
            color: red;
        }
        .hyperspan {
        position:absolute;
        width:100%;
        height:100%;
        left:0;
        top:0;
        }
    </style>
    <script>
function myFunction() {
  // Get the text field
  var copyText = window.location.href;

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText);
  
  // Alert the copied text
  alert("Copied the text: " + copyText);
}
</script>
@use('App\Models\User');
</head>
<body>

    <div class="container">
    @auth
    @if(request()->route('id') == Auth::user()->id)
    <div class="title">
        <h3>Twój garaż</h3>
    </div>
    <div class="title" style="position: relative;">
        <div class="wartosc" style="text-align:center"><h3>Udostępnij</h3></div>
            <a  onclick="myFunction()" style="cursor: pointer"> 
                <span class="hyperspan"></span>
            </a>  
    </div>
    @else
    <div class="title">
        <h3>Garaż użytkowinka: {{ User::find(request('id'))->name }}</h3>
    </div>
    @endif
    @endauth
    @guest
        <div class="title">
            <h3>Garaż użytkowinka:{{ User::find(request('id'))->name}}</h3>
        </div>
    @endguest
        @foreach($vehicles as $vehicle)
            <div class="pole">
                <!-- <div class="wartosc">{{$vehicle->user->name}}</div> -->
                <div class="wartosc" style="font-size: 40px; word-spacing: 10px;">{{$vehicle->brand}}
                {{$vehicle->model}}</div>
                <div class="wartosc" style="word-spacing: 10px; font-size: 25px;">{{$vehicle->year_of_prod}}r.
                {{$vehicle->engine_capacity}}cm3
                {{$vehicle->power}}KM</div>
                <div class="wartosc" style="position: absolute; right: 100px; top: 10px;">Data dodania: {{$vehicle->created_at}}</div>
                @if($vehicle->description != null)
                <div class="wartosc">Opis: {{$vehicle->description}}</div>
                @else
                <div class="wartosc">Opis: Brak</div>
                @endif
                @auth
                @if($vehicle->user_id == Auth::user()->id)
                <div class="wartosc" style="position: absolute; right: 50px; top: 10px;">
                    <a href="{{ route('edit', $vehicle) }}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="yellow" class="bi bi-tools" viewBox="0 0 16 16" style="filter: drop-shadow(0 0 5px yellow);">
                    <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                    </svg>
                    </a>
                </div>    
                <div class="wartosc" style="position: absolute; right: 10px; top: 10px">
                    <a href="{{ route('delete', $vehicle->id) }}"
                    onclick="return confirm('Jesteś pewien?')"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" style="filter: drop-shadow(0 0 5px red);">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg></a>
                </div>
                @endauth
                @endif
            </div>
        @endforeach
        @auth
        @if(request('id') == Auth::user()->id)
        <div class="pole" style="position: relative;">
            <div class="wartosc" style="text-align:center"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16" style="filter: drop-shadow(0 0 5px #26a62a);">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
            </svg></div>
            <a href="{{ route('create') }}" > 
                <span class="hyperspan"></span>
            </a>   
        </div>
        @endif
        @endauth  
</body>
</html>
