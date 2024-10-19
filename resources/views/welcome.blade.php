<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @auth
    <div class="logout">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Выйти</button>
        </form>
    </div>
    @section('content')
        @include('workspaces.index')
        @include('workspaces.create')
        @include('workspaces.edit')
        @include('api_tokens.index')
        @include('api_tokens.create')
    @endsection
    @else
    <a href="{{ route('login') }}">Войти</a>
    @endauth
</body>
</html>
