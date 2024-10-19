@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Токены API для рабочего пространства: {{ $workspace->title }}</h1>
    <a href="{{ route('api_tokens.create', $workspace) }}" class="btn btn-primary">Создать токен API</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Дата создания</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tokens as $token)
            <tr>
                <td>{{ $token->name }}</td>
                <td>{{ $token->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
