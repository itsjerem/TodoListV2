@extends('layouts.app')

@section('title', 'Catégories')

@section('content')
    <div class="flex flex-col m-8">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold mb-5">Catégories</h1>
            <a href="{{ route('categories.create') }}"
                class="mb-5 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                title="Créer une catégorie">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
            </a>
        </div>
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Couleur
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="w-1/3 px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $category->name }}</div>
                                    </td>
                                    <td class="w-1/3 px-6 py-4 whitespace-nowrap">
                                        <span class="w-7 h-6 inline-block rounded-full border-2 border-gray-300"
                                            style="background-color: {{ $category->color }}"></span>
                                    </td>
                                    <td class="w-1/3 px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('categories.show', $category) }}"
                                            class="text-indigo-600 hover:text-indigo-900 mr-4">Afficher</a>
                                        <a href="{{ route('categories.edit', $category) }}"
                                            class="text-indigo-600 hover:text-indigo-900 mr-4">Modifier</a>
                                        <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-900">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="m-4 flex justify-center">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
