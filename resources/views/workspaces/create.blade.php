@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Создать рабочее пространство</h1>

    <form action="{{ route('workspaces.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Создать</button>
    </form>
</div>
@endsection
