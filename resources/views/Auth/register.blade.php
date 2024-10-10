<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Имя">
        <input type="email" name="email" placeholder="Почта">
        <input type="password" name="password" placeholder="Пароль">
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>