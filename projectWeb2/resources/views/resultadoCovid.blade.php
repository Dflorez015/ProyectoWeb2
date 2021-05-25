<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    
    <style>
        .form-check {
            border-bottom: 1px solid black;
            margin-bottom: 1vh;
        }

        .form-check input {
            margin-top: 8px;
        }
    </style>

</head>

<body class="h-100" style="background-color: #f8fafc;">
    <div class="container pt-4 d-flex h-100">

        <div class="card text-center col-md-4 m-auto shadow border-0" style="height: 106px;">
            <div class="row">
                <p class="col-12 mt-3">{{$resultado}}</p>
                <p class="col-12 mt-3">Nombre: {{$cliente->nombre}}</p>
            </div>
        </div>

    
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>

