@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Редактировать рабочее пространство</h1>

    <form action="{{ route('workspaces.update', $workspace) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" name="title" class="form-control" value="{{ $workspace->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea name="description" class="form-control">{{ $workspace->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Сохранить изменения</button>
    </form>
</div>
@endsection
