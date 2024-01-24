@extends('layouts.app')

@section('title', 'Créer une tâche')

@section('content')
    <h1>Créer une tâche</h1>

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <label for="name">Nom</label>
        <input id="name" type="text" name="name">

        <label for="due_date">Date d'échéance</label>
        <input id="due_date" type="date" name="due_date">

        <label for="category_id">Catégorie</label>
        <select id="category_id" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit">Créer</button>
    </form>
@endsection