<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Sistema de Gestión de Usuarios</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="usuario-bg">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h1 class="text-success">
            Perfil Usuario
        </h1>

        <hr>

        <h4>
            Nombre:
            {{ auth()->user()->name }}
        </h4>

        <p>
            Rol:
            {{ auth()->user()->role }}
        </p>

        <div class="alert alert-success mt-3">

    Bienvenido al sistema de usuarios.

</div>

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