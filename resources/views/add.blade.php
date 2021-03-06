@extends('layouts.app')

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }


        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Add An Exercise
        </div>

        <form method="POST" action="/add">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="Exercise">Exercise:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="Difficulty">Difficulty:</label>
                <input type="radio" class="form-control" id="difficulty" name="difficulty" value="easy" required>
                <input type="radio" class="form-control" id="difficulty" name="difficulty" value="medium" required>
                <input type="radio" class="form-control" id="difficulty" name="difficulty" value="hard" required>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

        </form>
        <div class="alert alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>

    </div>
</div>
@endsection
</body>
</html>
