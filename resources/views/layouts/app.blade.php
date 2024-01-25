<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
