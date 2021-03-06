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

        <div class="card col-md-6 mx-auto py-3 shadow-sm border-0 mt-4">
            <form name="consulta" method="get" onsubmit="submitForm(this)">
                <div class="row">
                    <div class="form-group col-sm-10  m-auto">
                        <div class="row text-center flex-column">
                            <label for="ccConsulta" class="text-center mb-3">Consultar si el paciente está registrado:</label>
                            <input type="text" class="form-control w-100" id="ccConsulta" placeholder="Identificación" required>
                            <button type="submit" class="btn btn-primary mx-auto mt-3">Consultar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6 text-center m-auto" style="margin-top: 5rem !important; padding-bottom: 56px;">
            <div class="card shadow-sm border-0">
                <div class="card-header">
                    Agregar Paciente
                </div>
                <div class="card-body">
                    <form action="client" method="POST">
                        @csrf
                        <div class="form-group ">
                            <label for="cc">Identificación</label>
                            <input type="text" class="form-control" name="cc" id="cc" placeholder="Identificación" required>
                        </div>
                        <div class="form-group ">
                            <label for="allName">Nombre completo</label>
                            <input type="text" class="form-control" name="allName" id="allName" placeholder="Nombre completo" required>
                        </div>
                        <div class="form-group ">
                            <label for="eps">EPS</label>
                            <input type="text" class="form-control" name="eps" id="eps" placeholder="EPS" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" required>
                        </div>
                        <div class="form-group">
                            <label for="Direccion">Dirección</label>
                            <input type="text" class="form-control" name="direccion" id="Direccion" placeholder="Dirección" required>
                        </div>
                        <div class="form-group">
                            <label for="partnerName">Nombre del acompañante</label>
                            <input type="text" class="form-control" name="parnerName" id="parnerName" placeholder="Nombre del acompañante" required>
                        </div>
                        <div class="form-group">
                            <label for="parnerPhone">Contacto del acompañante</label>
                            <input type="text" class="form-control" name="parnerPhone" id="parnerPhone" placeholder="Contacto del acompañante" required>
                        </div>
                        <div class="form-group">
                            <label for="antece">Antecedentes médicos</label>
                            <textarea class="form-control" name="antece" placeholder="Si no tiene dejar vacío" id="antece" style="height: 5rem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        function submitForm() {
            let id = document.getElementById("ccConsulta").value
            document.consulta.action = "client" + "/" + id
        }
    </script>
</body>

</html>