<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </link>

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



        @if (isset($doctor) && !empty($doctor))
        <div class="col-md-6 text-center m-auto" style="margin-top: 5rem !important;">
            <div class="card">
                <div class="card-header">
                    Editar Doctor
                    <div class="card-body">
                        <form action="{{$doctor->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group ">
                                <label for="allName">Nombre del doctor</label>
                                <input type="text" name="allName" class="form-control" id="allName"
                                 placeholder="{{$doctor->nombre}}" value="{{$doctor->nombre}}" required>
                            </div>
                            <div class="form-group">
                                <label for="Direccion">Dirección</label>
                                <input type="text" name="direccion" class="form-control" id="Direccion"
                                 placeholder="{{$doctor->direccion}}" value="{{$doctor->direccion}}"  required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="text" name="phone" class="form-control" id="phone"
                                 placeholder="{{$doctor->telefono}}" value="{{$doctor->telefono}}" required>
                            </div>
                            <div class="form-group">
                                <label for="blood">Tipo de sangre</label>
                                <input type="text" name="blood" class="form-control" id="blood"
                                 placeholder="{{$doctor->tipo_sangre}}" value="{{$doctor->tipo_sangre}}"  required>
                            </div>
                            <div class="form-group">
                                <label for="exp">Años de experiencia</label>
                                <input type="text" name="exp" class="form-control" id="exp"
                                 placeholder="{{$doctor->experiencia_a}}" value="{{$doctor->experiencia_a}}"  required>
                            </div>
                            <div class="form-group">
                                <label for="date">Fecha de nacimiento</label>
                                <input type="date" name="date" class="form-control" id="date"
                                 placeholder="{{$doctor->fecha_nacimiento}}" value="{{$doctor->fecha_nacimiento}}" required>
                            </div>
                            <button type="submit" class="btn btn-outline-success">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>