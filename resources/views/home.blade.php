@extends('layouts.app')
@section('title', 'КиноТека — библиотека фильмов')
@section('content')
<main>
<section class="hero"><div class="container"><h1 class="hero__title">Ваша личная библиотека фильмов</h1><p class="hero__text">Ставьте оценки, пишите отзывы и собирайте избранное в одном месте.</p>
<form action="{{ route('movies.index') }}" method="get" class="search"><input type="search" name="search" class="search__input" placeholder="Найти фильм по названию"><button type="submit" class="btn btn--primary">Найти</button></form></div></section>
@foreach (['Новинки' => $latestMovies, 'Топ по рейтингу' => $topMovies] as $heading => $movies)
<section class="section"><div class="container"><div class="section__head"><h2 class="section__title">{{ $heading }}</h2><a href="{{ route('movies.index') }}" class="section__more">Весь каталог →</a></div><div class="grid">@foreach ($movies as $movie)<x-movie-card :movie="$movie" />@endforeach</div></div></section>
@endforeach
</main>
@endsection
