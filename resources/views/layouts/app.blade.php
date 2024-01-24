<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="pt-16">
    <header>
        @include('layouts.components.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Vous pouvez ajouter ici votre pied de page -->
    </footer>

    @yield('scripts')
</body>

</html>
