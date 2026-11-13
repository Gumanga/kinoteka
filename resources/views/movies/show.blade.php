<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie['title'] }} ({{ $movie['year'] }}) — КиноТека</title>
    <link rel="icon" href="{{ asset('images/logo.svg') }}" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="container header__inner">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo.svg') }}" alt="" class="logo__icon">
                <span>Кино<b>Тека</b></span>
            </a>
            <nav class="nav">
                <a href="{{ url('/') }}" class="nav__link">Главная</a>
                <a href="{{ url('/movies') }}" class="nav__link nav__link--active">Каталог</a>
            </nav>
            <div class="header__auth">
                <a href="#" class="btn btn--ghost">Войти</a>
                <a href="#" class="btn btn--primary">Регистрация</a>
            </div>
        </div>
    </header>

    <main class="section">
        <div class="container">
            <a href="{{ url('/movies') }}" class="back">← Назад в каталог</a>

            <article class="movie">
                <img class="movie__poster" src="{{ asset('images/posters/'.$movie['slug'].'.svg') }}" alt="Постер: {{ $movie['title'] }}">

                <div class="movie__body">
                    <h1 class="movie__title">{{ $movie['title'] }}</h1>
                    <p class="movie__original">{{ $movie['original_title'] }}, {{ $movie['year'] }}</p>

                    <div class="movie__rating">
                        <span class="movie__score">★ {{ number_format($movie['rating_avg'], 1) }}</span>
                        <span class="movie__votes">{{ $movie['rating_count'] }} оценок</span>
                    </div>

                    <dl class="movie__facts">
                        <dt>Год</dt><dd>{{ $movie['year'] }}</dd>
                        <dt>Страна</dt><dd>{{ $movie['country'] }}</dd>
                        <dt>Режиссёр</dt><dd>{{ $movie['director'] }}</dd>
                        <dt>Длительность</dt><dd>{{ $movie['duration_min'] }} мин</dd>
                        <dt>Жанры</dt>
                        <dd>
                            @foreach ($movie['genres'] as $genre)
                                <span class="tag">{{ $genre }}</span>
                            @endforeach
                        </dd>
                    </dl>

                    <p class="movie__description">{{ $movie['description'] }}</p>

                    {{-- Rating, review and favorites work after login in Sprint 3 (FR-13 – FR-17) --}}
                    <div class="movie__actions">
                        <a href="#" class="btn btn--primary">Оценить</a>
                        <a href="#" class="btn btn--ghost">♡ В избранное</a>
                    </div>
                </div>
            </article>

            <section class="reviews">
                <h2 class="section__title">Отзывы</h2>
                <p class="reviews__empty">Отзывов пока нет. Станьте первым, кто поделится впечатлением.</p>
            </section>
        </div>
    </main>

    <footer class="footer">
        <div class="container footer__inner">
            <span>© {{ date('Y') }} КиноТека · учебный проект курса «Серверные технологии»</span>
            <nav class="footer__nav">
                <a href="#">О проекте</a>
                <a href="#">Контакты</a>
                <a href="#">Правила</a>
            </nav>
        </div>
    </footer>
</body>
</html>
