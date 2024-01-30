@extends('layouts.app')

@section('title', $task->name)

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
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $task->name }}</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">{{ \Carbon\Carbon::parse($task->date)->format('d.m.Y') }}</p>
            <p class="mt-2 text-lg leading-8 text-gray-600">{{ $task->category->name }}</p>
            @if ($task->user)
                <p class="mt-2 text-lg leading-8 text-gray-600"><span class="text-sm font-light text-gray-500">De:</span>
                    {{ $task->user->name }}
                </p>
            @endif
            <a href="{{ route('tasks.edit', $task) }}"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Modifier
            </a>
        </div>
    </div>
@endsection
