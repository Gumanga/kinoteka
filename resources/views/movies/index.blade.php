<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог фильмов — КиноТека</title>
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
            <h1 class="page-title">Каталог фильмов</h1>

            {{-- Filters are static markup in Sprint 1; Sprint 2 wires them to ?search, ?genre, ?year, ?sort (FR-03, FR-04) --}}
            <form action="{{ url('/movies') }}" method="get" class="filters">
                <input type="search" name="search" class="search__input" placeholder="Название фильма">
                <select name="genre" class="select">
                    <option value="">Все жанры</option>
                    <option>фантастика</option>
                    <option>драма</option>
                    <option>комедия</option>
                    <option>триллер</option>
                    <option>боевик</option>
                    <option>фэнтези</option>
                    <option>аниме</option>
                    <option>криминал</option>
                </select>
                <select name="year" class="select">
                    <option value="">Любой год</option>
                    <option>2024</option>
                    <option>2023</option>
                    <option>2019</option>
                    <option>2014</option>
                    <option>2011</option>
                    <option>2010</option>
                </select>
                <select name="sort" class="select">
                    <option value="rating">По рейтингу</option>
                    <option value="year">По году</option>
                    <option value="title">По названию</option>
                </select>
                <button type="submit" class="btn btn--primary">Показать</button>
            </form>

            <p class="found">Найдено фильмов: {{ count($movies) }}</p>

            <div class="grid">
                @foreach ($movies as $movie)
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

            {{-- Pagination by 12 movies comes with the database in Sprint 2 (FR-02) --}}
            <nav class="pagination" aria-label="Страницы каталога">
                <span class="pagination__item pagination__item--active">1</span>
            </nav>
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
