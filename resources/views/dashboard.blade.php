<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body style="background-color:#93c5fd;">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h1 class="text-primary">
            Dashboard General
        </h1>

        <hr>

        <h4>
            Bienvenido:
            {{ auth()->user()->name }}
        </h4>

        <p>
            Has iniciado sesión correctamente.
        </p>

        <form method="POST"
              action="{{ route('logout') }}">

            @csrf

            <button type="submit"
                    class="btn btn-danger">

                Cerrar Sesión

            </button>

        </form>

    </div>

</div>

</body>
</html>