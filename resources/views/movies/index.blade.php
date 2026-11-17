@extends('layouts.app')
@section('title', 'Каталог фильмов — КиноТека')
@section('content')
<main class="section"><div class="container"><h1 class="page-title">Каталог фильмов</h1>
<form action="{{ route('movies.index') }}" method="get" class="filters">
    <input type="search" name="search" value="{{ request('search') }}" class="search__input" placeholder="Название фильма">
    <select name="genre" class="select"><option value="">Все жанры</option>@foreach ($genres as $genre)<option value="{{ $genre->slug }}" @selected(request('genre') === $genre->slug)>{{ $genre->name }}</option>@endforeach</select>
    <select name="year" class="select"><option value="">Любой год</option>@foreach ($years as $year)<option value="{{ $year }}" @selected((string) request('year') === (string) $year)>{{ $year }}</option>@endforeach</select>
    <select name="sort" class="select"><option value="rating" @selected(request('sort', 'rating') === 'rating')>По рейтингу</option><option value="year" @selected(request('sort') === 'year')>По году</option><option value="title" @selected(request('sort') === 'title')>По названию</option></select>
    <button type="submit" class="btn btn--primary">Показать</button>
</form>
<p class="found">Найдено фильмов: {{ $movies->total() }}</p>
@if ($movies->isEmpty())<p class="found">Ничего не найдено. Попробуйте изменить запрос или фильтры.</p>@endif
<div class="grid">@foreach ($movies as $movie)<x-movie-card :movie="$movie" />@endforeach</div>
@if ($movies->hasPages())<nav class="pagination" aria-label="Страницы каталога">@foreach ($movies->getUrlRange(1, $movies->lastPage()) as $page => $url)<a class="pagination__item {{ $page === $movies->currentPage() ? 'pagination__item--active' : '' }}" href="{{ $url }}" @if($page === $movies->currentPage()) aria-current="page" @endif>{{ $page }}</a>@endforeach</nav>@endif
</div></main>
@endsection
