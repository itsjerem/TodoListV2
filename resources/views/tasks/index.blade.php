@extends('layouts.app')

@section('title', 'Tâches')

@section('content')
    <h1>Tâches</h1>

    @foreach ($tasks as $task)
        <div>
            <h2>{{ $task->name }}</h2>
            <p>{{ $task->due_date }}</p>
            <p>{{ $task->category->name }}</p>
            <a href="{{ route('tasks.show', $task) }}">Voir</a>
            <a href="{{ route('tasks.edit', $task) }}">Modifier</a>
            <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </div>
    @endforeach
@endsection