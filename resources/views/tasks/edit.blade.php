@extends('layouts.app')

@section('title', 'Modifier la tâche')

@section('content')
    <h1>Modifier la tâche</h1>

    <form method="POST" action="{{ route('tasks.update', $task) }}">
        @csrf
        @method('PUT')

        <label for="name">Nom</label>
        <input id="name" type="text" name="name" value="{{ $task->name }}">

        <label for="due_date">Date d'échéance</label>
        <input id="due_date" type="date" name="due_date" value="{{ $task->due_date }}">

        <label for="category_id">Catégorie</label>
        <select id="category_id" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $task->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Mettre à jour</button>
    </form>
@endsection