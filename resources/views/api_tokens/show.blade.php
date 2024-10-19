@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Токен API успешно создан</h1>
    <p>Ваш токен API: <strong>{{ $token }}</strong></p>
    <p>Пожалуйста, сохраните этот токен, так как он не будет показан снова</p>
    <a href="{{ route('api_tokens.index', $workspace) }}" class="btn btn-primary">Вернуться к токенам API</a>
</div>
@endsection
