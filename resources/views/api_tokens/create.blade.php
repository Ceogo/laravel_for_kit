@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Создать токен API для рабочего пространства</h1>
    <form action="{{ route('api_tokens.store', $workspace) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Имя токена</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Создать</button>
    </form>
</div>
@endsection
