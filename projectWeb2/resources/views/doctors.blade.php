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


       @if (isset($doctors) && !empty($doctors))

            <table class="table table-striped mt-5">

                <thead>
                    <tr>
                        <th scope="col" class="text-center" >#</th>
                        <th scope="col" class="text-center" >Nombre completo</th>
                        <th scope="col" class="text-center" >Direccion</th>
                        <th scope="col" class="text-center" >Teléfono</th>
                        <th scope="col" class="text-center" >Tipo de sangre</th>
                        <th scope="col" class="text-center" >años de experiencia</th>
                        <th scope="col" class="text-center" >fecha de nacimiento</th>
                        <th scope="col" class="text-center" >Acciones</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($doctors as $count => $doctor)
                    <tr>
                        <th scope="row">{{ ($count + 1) }}</th>
                        <td class="text-center" >{{ $doctor->nombre }}</td>
                        <td class="text-center">{{ $doctor->direccion }}</td>
                        <td class="text-center">{{ $doctor->telefono }}</td>
                        <td class="text-center">{{ $doctor->tipo_sangre }}</td>
                        <td class="text-center">{{ $doctor->experiencia_a }}</td>
                        <td class="text-center">{{ $doctor->fecha_nacimiento }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="/docdelete/{{$doctor->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </a>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        @endif

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
                        <form action="docs" method="POST">
                            @csrf
                            <div class="form-group ">
                                <label for="allName">Nombre completo</label>
                                <input type="text" name="allName" class="form-control" id="allName" placeholder="Nombre completo" required>
                            </div>
                            <div class="form-group">
                                <label for="Direccion">Dirección</label>
                                <input type="text" name="direccion" class="form-control" id="Direccion" placeholder="Dirección" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Teléfono" required>
                            </div>
                            <div class="form-group">
                                <label for="blood">Tipo de sangre</label>
                                <input type="text" name="blood" class="form-control" id="blood" placeholder="Tipo de sangre" required>
                            </div>
                            <div class="form-group">
                                <label for="exp">Años de experiencia</label>
                                <input type="text" name="exp" class="form-control" id="exp" placeholder="Años de experiencia" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Fecha de nacimiento</label>
                                <input type="date" name="date" class="form-control" id="date" placeholder="Fecha de nacimiento" required>
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