<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Выйти</button>
        </form>
    @else
        <a href="{{ route('login') }}">Войти</a>
    @endauth
    <a href="{{ route('register') }}">Регистрация</a>
</body>
</html>