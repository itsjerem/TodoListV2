@extends('layouts.app')

@section('title', 'Créer une catégorie')

@section('content')
    <h1>Créer une catégorie</h1>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <label for="name">Nom</label>
        <input id="name" type="text" name="name">

        <label for="color">Couleur</label>
        <input id="color" type="text" name="color">

        <button type="submit">Créer</button>
    </form>
@endsection
