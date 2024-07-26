<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vacancy</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
<body class="font-sans antialiased dark:bg-black dark:text-white/50">

<div style="padding: 0 2rem; ">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <x-nav-link href="/" :active="request()->is('/')" type="button">Home</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link href="/vacancies" :active="request()->is('vacancies')" type="button">Vacancy
                        </x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link href="/contact" :active="request()->is('contact')" type="button">Contact
                        </x-nav-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="margin: 0; padding: 1rem; display: flex; flex-direction: row; justify-content: space-between">
        <h1 style="margin: 0; padding: 0; font-family: var(--navigateFontFamily),sans-serif; color: #06357a">{{ $hedding }}</h1>
        <x-button href="/vacancies/create" type="link">Добавить вакансию</x-button>
    </div>
    <hr class="bg-primary" style="margin: 0; padding: 0;">
    {{ $slot }}

</div>

</body>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>
