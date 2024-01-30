@extends('layouts.app')

@section('title', 'Modifier la tâche')

@section('content')
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="relative max-w-2xl mx-auto">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
                aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Modifier la tâche</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Modifiez les détails de la tâche ici.</p>
        </div>
        <form method="POST" action="{{ route('tasks.update', $task) }}" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Nom</label>
                    <div class="mt-2.5">
                        <input id="name" type="text" name="name" value="{{ old('name', $task->name) }}"
                            class="{{ $errors->has('name') ? 'border-2 border-red-500' : '' }} h-10 block w-full border-0 rounded-md px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('name')
                            <span class="text-red-500 italic">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="date" class="block text-sm font-semibold leading-6 text-gray-900">Date
                        d'échéance</label>
                    <div class="mt-2.5">
                        <input id="date" type="date" name="date"
                            value="{{ \Carbon\Carbon::parse($task->date)->format('Y-m-d') }}"
                            class="h-10 block w-full border-0 rounded-md px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="category_id" class="block text-sm font-semibold leading-6 text-gray-900">Catégorie</label>
                    <div class="mt-2.5">
                        <select id="category_id" name="category_id"
                            class="h-10 block w-full border-0 rounded-md px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $task->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <label for="user_id" class="block text-sm font-semibold leading-6 text-gray-900">Utilisateur</label>
                    <div class="mt-2.5">
                        <select id="user_id" name="user_id"
                            class="h-10 block w-full border-0 rounded-md px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="">Aucun</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $task->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <button type="submit"
                        class="w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 sm:text-sm">
                        Mettre à jour
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
