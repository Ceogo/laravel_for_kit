@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Рабочие пространства</h1>
    <a href="{{ route('workspaces.create') }}" class="btn btn-primary">Создать Workspace</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @if($workspaces->isEmpty())
            <tr>
                <td colspan="3">Нет Workspace</td>
            </tr>
            @else
                @foreach($workspaces as $workspace)
                    <tr>
                        <td>{{ $workspace->title }}</td>
                        <td>{{ $workspace->description }}</td>
                        <td>
                            <a href="{{ route('workspaces.edit', $workspace) }}" class="btn btn-warning">Редактировать</a>
                            <a href="{{ route('api_tokens.index', $workspace) }}" class="btn btn-info">Токены API</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection
