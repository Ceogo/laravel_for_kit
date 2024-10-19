<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Имя"><br>
        <input type="email" name="email" placeholder="Почта"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <button type="submit">Регистрация</button>
    </form>
</body>
</html>
