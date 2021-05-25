<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </link>
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

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="/">
                <h5>SoftBiokernel</h5>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="/">Agregar un paciente</a>
                    <a class="nav-item nav-link active" href="/docs">Creación de Doctores</a>
                </div>
            </div>
        </nav>

        @if (isset($paciente) && !empty($paciente))
        <div class="card text-center col-md-4 m-auto">
            <div class="row">
                <p class="col-12">Nombre: {{$paciente -> nombre}}</p>
                <p class="col-12"> id: {{$paciente -> identificacion}}</p>
            </div>
        </div>
        <div class="col-md-6 m-auto" style="margin-top: 5rem !important;">
            <div class="card">
                <div class="card-header text-center">
                    Consulta de Covid-19
                </div>
                <div class="card-body text-left">
                    <h4>Seleccionar los sintomas que presenta el paciente</h4>
                    <form action="consult/{{$paciente->identificacion}}" method="POST" style="font-size: 1.2rem;">
                        @csrf
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="tos">
                            <label class="form-check-label" for="tos">Tos</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="respirar">
                            <label class="form-check-label" for="respirar">Dificultad al respirar</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="fiebre">
                            <label class="form-check-label" for="fiebre">Fiebre</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="escalofrio">
                            <label class="form-check-label" for="escalofrio">Escalofríos</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="temblor">
                            <label class="form-check-label" for="temblor">Temblores</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dolor">
                            <label class="form-check-label" for="dolor">Dolor muscular</label>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary">Consultar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>