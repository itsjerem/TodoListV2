@extends('layouts.app')

@section('title', 'Modifier la catégorie')

@section('content')
    <h1>Modifier la catégorie</h1>

    <form method="POST" action="{{ route('categories.update', $category) }}">
        @csrf
        @method('PUT')

        <label for="name">Nom</label>
        <input id="name" type="text" name="name" value="{{ $category->name }}">

        <label for="color">Couleur</label>
        <input id="color" type="text" name="color" value="{{ $category->color }}">

        <button type="submit">Mettre à jour</button>
    </form>
@endsection
