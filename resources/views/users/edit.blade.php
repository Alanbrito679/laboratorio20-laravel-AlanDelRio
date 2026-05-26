<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Usuario</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="users-bg">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h1 class="mb-4">
            Editar Usuario
        </h1>

        <form action="{{ route('users.update', $user) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label">
                    Usuario
                </label>

                <input type="text"
                       name="name"
                       value="{{ $user->name }}"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Email
                </label>

                <input type="email"
                       name="email"
                       value="{{ $user->email }}"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Rol
                </label>

                <select name="role"
                        class="form-select">

                    <option value="admin"
                        {{ $user->role == 'admin' ? 'selected' : '' }}>

                        Admin

                    </option>

                    <option value="usuario"
                        {{ $user->role == 'usuario' ? 'selected' : '' }}>

                        Usuario

                    </option>

                </select>

            </div>

            <button type="submit"
                    class="btn btn-warning">

                Actualizar

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