<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist - @yield('title')</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/@fullcalendar/common@5/main.min.css' rel='stylesheet' />
    <link href='https://unpkg.com/@fullcalendar/daygrid@5/main.min.css' rel='stylesheet' />

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
