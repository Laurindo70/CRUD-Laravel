<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Editar Usuario</title>
</head>
<body>

    <form action="{{ route('users.edit', ['user' => $user->id]) }}" method="post">
        @csrf
        @method('PUT')
        <p><label for="">Nome do Usuário:</label>
        <input type="text" name="name" value="{{ $user->name }}"></p>

        <p><label for="">E-mail do Usuário:</label>
        <input type="email" name="email" value="{{ $user->email }}"></p>

        <p><label for="">Senha do Usuário:</label>
        <input type="password" name="password"></p>

        <p><input type="submit" value="Editar usuário"></p>
    </form>

</body>
</html>
