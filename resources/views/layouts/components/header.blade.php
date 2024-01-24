<nav class="bg-blue-500 p-4 fixed w-full top-0 z-50">
    <div class="container mx-auto flex items-center justify-between">
        <a href="{{ url('/') }}" class="text-white text-lg font-semibold">TodoList</a>

        <div class="flex items-center">
            <a href="{{ route('tasks.create') }}" class="text-white mr-4">Créer une tâche</a>
            <a href="{{ route('categories.create') }}" class="text-white mr-4">Créer une catégorie</a>
            <a href="{{ route('login') }}" class="text-white">Se connecter</a>
        </div>
    </div>
</nav>
