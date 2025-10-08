<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio - Web Developer')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>

    <div class="page-wrapper d-flex flex-column min-vh-100">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('portfolio.home') }}">Portfolio</a>
                <div>
                    <a class="navbar-brand d-inline text-light px-3" href="{{ route('portfolio.about') }}">About</a>
                    <a class="navbar-brand d-inline text-light px-3" href="{{ route('portfolio.feedback') }}">Feedback</a>
                    <a class="navbar-brand d-inline text-light px-3" href="{{ route('portfolio.contact') }}">Contacts</a> 
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="content flex-grow-1 pt-5">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="mt-auto">
            <div class="container">
                <p>© {{ date('Y') }} Portfolio. Built with Laravel {{ app()->version() }}</p>
            </div>
        </footer>

    </div>

</body>
</html>

</x-app-layout>
