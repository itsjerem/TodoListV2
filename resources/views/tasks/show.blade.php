@extends('layouts.app')

@section('title', $task->name)

@section('content')
    <h1>{{ $task->name }}</h1>
    <p>{{ $task->due_date }}</p>
    <p>{{ $task->category->name }}</p>
    <a href="{{ route('tasks.edit', $task) }}">Modifier</a>
    <form method="POST" action="{{ route('tasks.destroy', $task) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endsection