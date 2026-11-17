@extends('layouts.app')
@section('title', 'Страница не найдена — КиноТека')
@section('content')
<main class="section"><div class="container" style="text-align:center;padding:5rem 1rem"><h1 class="page-title">Страница не найдена</h1><p>Проверьте адрес или вернитесь к фильмам.</p><a class="btn btn--primary" href="{{ route('movies.index') }}">Открыть каталог</a></div></main>
@endsection
