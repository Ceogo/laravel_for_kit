<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Логин</title>
</head>
<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Имя"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <button type="submit">Войти</button>
    </form>
</body>
</html>
