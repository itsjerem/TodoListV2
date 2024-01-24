@extends('layouts.app')

@section('title', 'TodoList | Accueil')

@section('content')
    <h1>Bienvenue dans la TodoList</h1>

    <a href="{{ route('tasks.create') }}">Créer une nouvelle tâche</a>
    <a href="{{ route('categories.create') }}">Créer une nouvelle catégorie</a>

    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>

        @foreach ($category->tasks as $task)
            <div>
                <h3>{{ $task->name }}</h3>
                <p>{{ $task->due_date }}</p>
                <a href="{{ route('tasks.show', $task) }}">Voir</a>
                <a href="{{ route('tasks.edit', $task) }}">Modifier</a>
                <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        @endforeach
    @endforeach
@endsection