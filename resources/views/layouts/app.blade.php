<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'КиноТека')</title>
    <link rel="icon" href="{{ asset('images/logo.svg') }}" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header class="header"><div class="container header__inner">
    <a href="{{ route('home') }}" class="logo"><img src="{{ asset('images/logo.svg') }}" alt="" class="logo__icon"><span>Кино<b>Тека</b></span></a>
    <nav class="nav"><a href="{{ route('home') }}" class="nav__link {{ request()->routeIs('home') ? 'nav__link--active' : '' }}">Главная</a><a href="{{ route('movies.index') }}" class="nav__link {{ request()->routeIs('movies.*') ? 'nav__link--active' : '' }}">Каталог</a></nav>
</div></header>
@yield('content')
<footer class="footer"><div class="container footer__inner">
    <span>© {{ date('Y') }} КиноТека · учебный проект курса «Серверные технологии»</span>
    <nav class="footer__nav"><a href="{{ route('pages.show', 'about') }}">О проекте</a><a href="{{ route('pages.show', 'contacts') }}">Контакты</a><a href="{{ route('pages.show', 'rules') }}">Правила</a></nav>
</div></footer>
</body></html>
