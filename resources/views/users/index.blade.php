<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Usuarios</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="users-bg">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h1 class="mb-4">
            Gestión de Usuarios
        </h1>

        <a href="/admin"
   class="btn btn-secondary mb-3">

    Volver al Panel

</a>

        <a href="{{ route('users.create') }}"
           class="btn btn-primary mb-3">

            Crear Usuario

        </a>

        <table class="table table-bordered table-hover">

            <thead class="table-dark">

                <tr>

                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>

                </tr>

            </thead>

            <tbody>

                @foreach($users as $user)

                <tr>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>

                    <td>

                        <a href="{{ route('users.edit', $user) }}"
                           class="btn btn-warning btn-sm">

                            Editar

                        </a>

                        <form action="{{ route('users.destroy', $user) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
        class="btn btn-danger btn-sm"
        onclick="return confirm('¿Eliminar usuario?')">

    Eliminar

</button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

</body>
</html>