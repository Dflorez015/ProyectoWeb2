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

        <div class="col-md-6 m-auto" style="margin-top: 5rem !important;">
            <div class="card">
                <div class="card-header text-center mb-3">
                    Hospital
                </div>

                <table class="table table-striped text-center">
                    <tbody>
                        <tr>
                            <th scope="row">
                                Aquí va el nombre
                            </th>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>