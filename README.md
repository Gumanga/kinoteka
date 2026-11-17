# КиноТека

Веб-библиотека фильмов на Laravel: каталог, карточки фильмов, оценки, отзывы и избранное.
Учебный командный проект курса «Серверные технологии».

## Стек

- PHP 8.3+ (Laravel Herd), Laravel 12
- MySQL 8 (DBngin)
- Blade, CSS, позже Tailwind + Vite
- Node.js LTS + npm

## Как запустить проект

```bash
git clone https://github.com/Gumanga/kinoteka.git
cd kinoteka
git checkout develop

composer install
cp .env.example .env
php artisan key:generate
npm install
```

Положите папку `kinoteka` в папку сайтов Herd (по умолчанию `~/Herd`), и сайт откроется по адресу
http://kinoteka.test. Без Herd можно запустить встроенный сервер:

```bash
php artisan serve
```

и открыть http://127.0.0.1:8000.

В Спринте 1 страницы работают без базы данных. Начиная со Спринта 2 нужна MySQL:
запустите MySQL 8 в DBngin (порт 3306), создайте базу `kinoteka` и выполните
`php artisan migrate --seed`.

## Тесты

```bash
php artisan test
```

## Страницы (Спринт 1, Лаба 1)

| Адрес | Что показывает |
|---|---|
| `/` | Главная: «Новинки» и «Топ по рейтингу», по 6 фильмов |
| `/movies` | Каталог фильмов |
| `/movies/{slug}` | Карточка фильма, например `/movies/interstellar` |

Пока данные статичные (`app/Support/StaticMovies.php`). В Спринте 2 их заменят модели Movie и Genre.

## Команда

- Тимофей Шило - Frontend developer
- Перегородиев Даниил - Backend developer
- Селявко Марат - Lead Developer
- Шило Степан - Quality Assurance Engineer

## Спринт 2: каталог из базы данных

После настройки MySQL из `.env.example` выполните:

```bash
php artisan migrate:fresh --seed
php artisan test
php artisan serve
```

Для локальной проверки без MySQL можно использовать SQLite: в `.env` укажите `DB_CONNECTION=sqlite` и путь к существующему файлу в `DB_DATABASE`, затем выполните те же команды. Сидер создаёт 30 фильмов, 8 жанров и страницы `/page/about`, `/page/contacts`, `/page/rules`. Каталог поддерживает `search`, `genre`, `year`, `sort` и пагинацию по 12. `migrate:fresh` удаляет текущие таблицы; для сохранения данных используйте `php artisan migrate --seed`.
