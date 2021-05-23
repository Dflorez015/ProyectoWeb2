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
                    <a class="nav-item nav-link active" href="#">Agregar un paciente</a>
                    <a class="nav-item nav-link active" href="/docs">Creación de Doctores</a>
                </div>
            </div>
        </nav>


        <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#aggDoctor">
            Agregar Doctor
        </button>

        <!-- Modal -->
        <div class="modal fade" id="aggDoctor" tabindex="-1" role="dialog" aria-labelledby="aggDoctorTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ml-auto">Agregar Doctor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="docs">
                            @csrf
                            <div class="form-group ">
                                <label for="allName">Nombre completo</label>
                                <input type="text" class="form-control" id="allName" placeholder="Nombre completo" required>
                            </div>
                            <div class="form-group">
                                <label for="Direccion">Dirección</label>
                                <input type="text" class="form-control" id="Direccion" placeholder="Dirección" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="text" class="form-control" id="phone" placeholder="Teléfono" required>
                            </div>
                            <div class="form-group">
                                <label for="blood">Tipo de sangre</label>
                                <input type="text" class="form-control" id="blood" placeholder="Tipo de sangre" required>
                            </div>
                            <div class="form-group">
                                <label for="exp">Años de experiencia</label>
                                <input type="text" class="form-control" id="exp" placeholder="Años de experiencia" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="date" placeholder="Fecha de nacimiento" required>
                            </div>
                            <button type="submit" class="btn btn-outline-success">Ingresar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>