<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" type="text/css" href="css/app.css">
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

        <form action="paciente" method="GET">
            <div class="card">
                <div class="row">
                    <div class="form-group col-sm-10  m-auto">
                        <div class="row text-center">
                            <label for="ccConsulta" class="col-sm-6 m-auto">Consultar si el paciente está registrado:</label>
                            <input type="text" class="form-control col-sm-6" id="ccConsulta" placeholder="Identificación" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-auto">Consultar</button>
                </div>
            </div>
        </form>

        <div class="col-md-6 text-center m-auto" style="margin-top: 5rem !important;">
            <div class="card">
                <div class="card-header">
                    Agregar Paciente
                </div>
                <div class="card-body">
                    <form action="docs" method="POST">
                        @csrf
                        <div class="form-group ">
                            <label for="cc">Identificación</label>
                            <input type="text" class="form-control" id="cc" placeholder="Identificación" required>
                        </div>
                        <div class="form-group ">
                            <label for="allName">Nombre completo</label>
                            <input type="text" class="form-control" id="allName" placeholder="Nombre completo" required>
                        </div>
                        <div class="form-group ">
                            <label for="eps">EPS</label>
                            <input type="text" class="form-control" id="eps" placeholder="EPS" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" class="form-control" id="phone" placeholder="Teléfono" required>
                        </div>
                        <div class="form-group">
                            <label for="Direccion">Dirección</label>
                            <input type="text" class="form-control" id="Direccion" placeholder="Dirección" required>
                        </div>
                        <div class="form-group">
                            <label for="partnerName">Nombre del acompañante</label>
                            <input type="text" class="form-control" id="parnerName" placeholder="Nombre del acompañante" required>
                        </div>
                        <div class="form-group">
                            <label for="parnerPhone">Contacto del acompañante</label>
                            <input type="text" class="form-control" id="parnerPhone" placeholder="Contacto del acompañante" required>
                        </div>
                        <div class="form-group">
                            <label for="antece">Antecedemtes médicos</label>
                            <textarea class="form-control" placeholder="Si no tiene dejar vacío" id="antece" style="height: 5rem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>