@extends('layouts.app')

@section('title', 'Catégories')

@section('content')
    <h1>Catégories</h1>

    @foreach ($categories as $category)
        <div>
            <h2>{{ $category->name }}</h2>
            <p>{{ $category->color }}</p>
        </div>
    @endforeach
@endsection
