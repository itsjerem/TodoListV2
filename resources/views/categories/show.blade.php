@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->color }}</p>
@endsection
