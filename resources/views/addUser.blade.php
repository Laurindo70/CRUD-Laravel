<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Cadastro de Usuario</title>
</head>
<body>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <p><label for="">Nome do Usuário:</label>
        <input type="text" name="name"></p>

        <p><label for="">E-mail do Usuário:</label>
        <input type="email" name="email"></p>

        <p><label for="">Senha do Usuário:</label>
        <input type="password" name="password"></p>

        <p><input type="submit" value="Cadastrar usuário"></p>
    </form>

</body>
</html>
