@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="flex flex-col m-8">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold mb-5">👋 <span class="font-light">Bienvenue dans la</span> <i
                    class="fas fa-list"></i> TodoList !</h1>
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                <a href="{{ route('calendar') }}"
                    class="bg-gray-100 opacity-40 shadow border border-gray-200 text-black font-bold py-2 px-4 rounded mr-2 cursor-not-allowed"
                    onclick="event.preventDefault();">
                    <i class="fas fa-calendar"></i> Vue calendrier
                </a>
                <a href="{{ route('categories.index') }}"
                    class="bg-gray-100 opacity-40 shadow border border-gray-200 hover:bg-indigo-700 hover:opacity-100 hover:text-white text-black font-bold py-2 px-4 rounded">
                    <i class="fas fa-plus"></i> Ajouter une catégorie
                </a>
            </div>

        </div>
        @foreach ($categories as $category)
            <div>
                <h2 class="text-2xl font-bold mt-10 mb-5">
                    <a href="{{ route('categories.show', $category) }}" class="hover:text-indigo-900"
                        style="color: {{ $category->color }}">
                        {{ $category->name }}
                    </a>
                </h2>
                <div class="flex flex-wrap gap-4">
                    @foreach ($category->tasks as $task)
                        <div class="shadow border border-gray-200 rounded-lg p-6 w-64 h-64 overflow-hidden flex flex-col justify-between relative {{ $category->getTextColor() }}"
                            style="background-color: {{ $category->color }}">
                            <div>
                                <h3 class="text-lg font-semibold mb-2 overflow-ellipsis overflow-hidden">{{ $task->name }}
                                </h3>
                            </div>
                            <div class="absolute bottom-16 left-6 right-6">
                                @if ($task->user)
                                    <p class="mb-2 text-sm font-light overflow-ellipsis overflow-hidden">
                                        {{ $task->user->name }}
                                    </p>
                                @endif
                                <p class="mb-2 text-sm overflow-ellipsis overflow-hidden">
                                    {{ \Carbon\Carbon::parse($task->date)->format('d.m.Y') }}</p>
                            </div>
                            <div class="flex space-x-4 items-center justify-center">
                                <a href="{{ route('tasks.show', $task) }}"
                                    class="{{ $category->getTextColor() }} opacity-20 hover:{{ $category->getTextColor() }} hover:opacity-100">
                                    <i class="fas fa-eye"></i> <!-- Icône Voir -->
                                </a>
                                <a href="{{ route('tasks.edit', $task) }}"
                                    class="{{ $category->getTextColor() }} opacity-20 hover:{{ $category->getTextColor() }} hover:opacity-100">
                                    <i class="fas fa-edit"></i> <!-- Icône Modifier -->
                                </a>
                                <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="{{ $category->getTextColor() }} opacity-20 hover:text-red-600 hover:opacity-100">
                                        <i class="fas fa-trash"></i> <!-- Icône Supprimer -->
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <div
                        class="shadow border border-gray-200 opacity-100 rounded-lg p-6 w-64 h-64 overflow-hidden flex items-center justify-center bg-gray-50">
                        <a href="{{ route('tasks.create') }}"
                            class="text-gray-900 opacity-30 hover:text-indigo-600 hover:opacity-100">
                            <i class="fas fa-plus"></i> <!-- Icône Ajouter -->
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
