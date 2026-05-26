<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Crear Usuario</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="users-bg">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h1 class="mb-4">
            Crear Usuario
        </h1>

        <form action="{{ route('users.store') }}"
              method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    Usuario
                </label>

                <input type="text"
                       name="name"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Email
                </label>

                <input type="email"
                       name="email"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Contraseña
                </label>

                <input type="password"
                       name="password"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Rol
                </label>

                <select name="role"
                        class="form-select">

                    <option value="admin">
                        Admin
                    </option>

                    <option value="usuario">
                        Usuario
                    </option>

                </select>

            </div>

            <button type="submit"
                    class="btn btn-success">

                Guardar

            </button>

            <a href="{{ route('users.index') }}"
               class="btn btn-secondary">

                Volver

            </a>

        </form>

    </div>

</div>

</body>
</html>