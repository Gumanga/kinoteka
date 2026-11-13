<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КиноТека — библиотека фильмов</title>
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
                <a href="{{ url('/') }}" class="nav__link nav__link--active">Главная</a>
                <a href="{{ url('/movies') }}" class="nav__link">Каталог</a>
            </nav>
            <div class="header__auth">
                <a href="#" class="btn btn--ghost">Войти</a>
                <a href="#" class="btn btn--primary">Регистрация</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1 class="hero__title">Ваша личная библиотека фильмов</h1>
                <p class="hero__text">Ставьте оценки, пишите отзывы и собирайте избранное в одном месте.</p>
                <form action="{{ url('/movies') }}" method="get" class="search">
                    <input type="search" name="search" class="search__input" placeholder="Найти фильм по названию">
                    <button type="submit" class="btn btn--primary">Найти</button>
                </form>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section__head">
                    <h2 class="section__title">Новинки</h2>
                    <a href="{{ url('/movies') }}" class="section__more">Весь каталог →</a>
                </div>
                <div class="grid">
                    @foreach ($latestMovies as $movie)
                        <a href="{{ url('/movies/'.$movie['slug']) }}" class="card">
                            <div class="card__poster">
                                <img src="{{ asset('images/posters/'.$movie['slug'].'.svg') }}" alt="Постер: {{ $movie['title'] }}">
                                <span class="card__rating">★ {{ number_format($movie['rating_avg'], 1) }}</span>
                            </div>
                            <h3 class="card__title">{{ $movie['title'] }}</h3>
                            <p class="card__meta">{{ $movie['year'] }} · {{ implode(', ', $movie['genres']) }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section__head">
                    <h2 class="section__title">Топ по рейтингу</h2>
                    <a href="{{ url('/movies') }}" class="section__more">Весь каталог →</a>
                </div>
                <div class="grid">
                    @foreach ($topMovies as $movie)
                        <a href="{{ url('/movies/'.$movie['slug']) }}" class="card">
                            <div class="card__poster">
                                <img src="{{ asset('images/posters/'.$movie['slug'].'.svg') }}" alt="Постер: {{ $movie['title'] }}">
                                <span class="card__rating">★ {{ number_format($movie['rating_avg'], 1) }}</span>
                            </div>
                            <h3 class="card__title">{{ $movie['title'] }}</h3>
                            <p class="card__meta">{{ $movie['year'] }} · {{ implode(', ', $movie['genres']) }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
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
