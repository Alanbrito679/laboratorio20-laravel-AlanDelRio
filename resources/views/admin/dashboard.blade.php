<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Sistema de Gestión de Usuarios</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="admin-bg">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h1 class="text-primary">
            Bienvenido Administrador
        </h1>

        <hr>

        <h4>
            Usuario:
            {{ auth()->user()->name }}
        </h4>

        <p>
            Rol:
            {{ auth()->user()->role }}
        </p>
        <div class="alert alert-primary mt-3">

    Panel de administración activo.

</div>

        <div class="mt-4">

            <a href="{{ route('users.index') }}"
               class="btn btn-success">

                Gestionar Usuarios

            </a>

            <form method="POST"
                  action="{{ route('logout') }}"
                  class="d-inline">

                @csrf

                <button type="submit"
                        class="btn btn-danger">

                    Cerrar Sesión

                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>