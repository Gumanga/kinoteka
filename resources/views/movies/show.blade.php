@extends('layouts.app')
@section('title', $movie->title.' — КиноТека')
@section('content')
<main class="section"><div class="container"><a href="{{ route('movies.index') }}" class="back">← Назад в каталог</a>
<article class="movie"><img class="movie__poster" src="{{ asset($movie->poster ?: 'images/logo.svg') }}" alt="Постер: {{ $movie->title }}"><div class="movie__body">
<h1 class="movie__title">{{ $movie->title }}</h1><p class="movie__original">{{ $movie->original_title }}, {{ $movie->year }}</p>
<div class="movie__rating"><span class="movie__score">★ {{ number_format((float) $movie->rating_avg, 1) }}</span><span class="movie__votes">{{ $movie->rating_count }} оценок</span></div>
<dl class="movie__facts"><dt>Год</dt><dd>{{ $movie->year }}</dd><dt>Страна</dt><dd>{{ $movie->country }}</dd><dt>Режиссёр</dt><dd>{{ $movie->director }}</dd><dt>Длительность</dt><dd>{{ $movie->duration_min }} мин</dd><dt>Жанры</dt><dd>@foreach ($movie->genres as $genre)<span class="tag">{{ $genre->name }}</span>@endforeach</dd></dl>
<p class="movie__description">{{ $movie->description }}</p></div></article>
<section class="reviews"><h2 class="section__title">Отзывы</h2><p class="reviews__empty">Отзывов пока нет.</p></section>
</div></main>
@endsection
