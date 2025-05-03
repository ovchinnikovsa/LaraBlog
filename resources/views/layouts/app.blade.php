<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="page-wrapper">
    <nav class="main-nav">
        <ul class="nav-list">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('rating') }}">Rating</a></li>
            <li><a href="{{ route('articles.index') }}">Articles</a></li>
            <li><a href="{{ route('articles.create') }}">New Article</a></li>
        </ul>
    </nav>

    <main class="content-box">
        <h1 class="page-title">@yield('header')</h1>

        @if (Session::has('message'))
            <div class="alert-message">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="main-content">
            @yield('content')
        </div>
    </main>
</div>
</body>
</html>
