<?php

namespace App\Support;

/**
 * Static demo catalog for Sprint 1 (Lab 1).
 *
 * In Sprint 2 this class is replaced by the Movie and Genre Eloquent models,
 * so views already use the same field names as the future `movies` table.
 */
class StaticMovies
{
    /**
     * @return array<int, array<string, mixed>>
     */
    public static function all(): array
    {
        return [
            [
                'slug' => 'interstellar',
                'title' => 'Интерстеллар',
                'original_title' => 'Interstellar',
                'year' => 2014,
                'country' => 'США, Великобритания',
                'director' => 'Кристофер Нолан',
                'duration_min' => 169,
                'genres' => ['фантастика', 'драма'],
                'rating_avg' => 8.6,
                'rating_count' => 214,
                'description' => 'Земля умирает от засухи и пыльных бурь. Бывший пилот NASA отправляется через червоточину искать планету, на которую сможет переселиться человечество.',
            ],
            [
                'slug' => 'inception',
                'title' => 'Начало',
                'original_title' => 'Inception',
                'year' => 2010,
                'country' => 'США, Великобритания',
                'director' => 'Кристофер Нолан',
                'duration_min' => 148,
                'genres' => ['фантастика', 'боевик', 'триллер'],
                'rating_avg' => 8.7,
                'rating_count' => 198,
                'description' => 'Команда специалистов проникает в чужие сны, чтобы красть идеи. Новое задание наоборот: не украсть мысль, а незаметно её внедрить.',
            ],
            [
                'slug' => 'the-green-mile',
                'title' => 'Зелёная миля',
                'original_title' => 'The Green Mile',
                'year' => 1999,
                'country' => 'США',
                'director' => 'Фрэнк Дарабонт',
                'duration_min' => 189,
                'genres' => ['драма', 'фэнтези'],
                'rating_avg' => 9.1,
                'rating_count' => 251,
                'description' => 'Надзиратель блока смертников знакомится с осуждённым великаном, который обладает необъяснимым даром исцелять людей.',
            ],
            [
                'slug' => 'the-shawshank-redemption',
                'title' => 'Побег из Шоушенка',
                'original_title' => 'The Shawshank Redemption',
                'year' => 1994,
                'country' => 'США',
                'director' => 'Фрэнк Дарабонт',
                'duration_min' => 142,
                'genres' => ['драма'],
                'rating_avg' => 9.1,
                'rating_count' => 240,
                'description' => 'Банкир, осуждённый за преступление, которого не совершал, годами сохраняет надежду и достоинство в одной из самых суровых тюрем.',
            ],
            [
                'slug' => 'forrest-gump',
                'title' => 'Форрест Гамп',
                'original_title' => 'Forrest Gump',
                'year' => 1994,
                'country' => 'США',
                'director' => 'Роберт Земекис',
                'duration_min' => 142,
                'genres' => ['драма', 'мелодрама', 'комедия'],
                'rating_avg' => 8.9,
                'rating_count' => 205,
                'description' => 'Простодушный парень из Алабамы невольно оказывается участником главных событий американской истории второй половины XX века.',
            ],
            [
                'slug' => 'the-matrix',
                'title' => 'Матрица',
                'original_title' => 'The Matrix',
                'year' => 1999,
                'country' => 'США',
                'director' => 'Лана и Лилли Вачовски',
                'duration_min' => 136,
                'genres' => ['фантастика', 'боевик'],
                'rating_avg' => 8.5,
                'rating_count' => 187,
                'description' => 'Программист узнаёт, что привычный мир — компьютерная симуляция, и присоединяется к восстанию против машин.',
            ],
            [
                'slug' => 'spirited-away',
                'title' => 'Унесённые призраками',
                'original_title' => 'Sen to Chihiro no Kamikakushi',
                'year' => 2001,
                'country' => 'Япония',
                'director' => 'Хаяо Миядзаки',
                'duration_min' => 125,
                'genres' => ['аниме', 'фэнтези'],
                'rating_avg' => 8.6,
                'rating_count' => 163,
                'description' => 'Девочка попадает в мир духов и устраивается работать в волшебную баню, чтобы спасти родителей и вернуться домой.',
            ],
            [
                'slug' => 'parasite',
                'title' => 'Паразиты',
                'original_title' => 'Gisaengchung',
                'year' => 2019,
                'country' => 'Южная Корея',
                'director' => 'Пон Джун-хо',
                'duration_min' => 132,
                'genres' => ['триллер', 'драма', 'комедия'],
                'rating_avg' => 8.0,
                'rating_count' => 149,
                'description' => 'Бедная семья по одному устраивается на работу к богачам, но тщательно выстроенный план выходит из-под контроля.',
            ],
            [
                'slug' => 'dune-part-two',
                'title' => 'Дюна: Часть вторая',
                'original_title' => 'Dune: Part Two',
                'year' => 2024,
                'country' => 'США, Канада',
                'director' => 'Дени Вильнёв',
                'duration_min' => 166,
                'genres' => ['фантастика', 'драма'],
                'rating_avg' => 8.3,
                'rating_count' => 132,
                'description' => 'Пол Атрейдес объединяется с фрименами пустынной планеты Арракис, чтобы отомстить за гибель своей семьи.',
            ],
            [
                'slug' => 'oppenheimer',
                'title' => 'Оппенгеймер',
                'original_title' => 'Oppenheimer',
                'year' => 2023,
                'country' => 'США, Великобритания',
                'director' => 'Кристофер Нолан',
                'duration_min' => 180,
                'genres' => ['драма', 'история'],
                'rating_avg' => 8.1,
                'rating_count' => 141,
                'description' => 'История физика, руководившего созданием атомной бомбы, и цены, которую ему пришлось заплатить за своё открытие.',
            ],
            [
                'slug' => 'brother',
                'title' => 'Брат',
                'original_title' => 'Брат',
                'year' => 1997,
                'country' => 'Россия',
                'director' => 'Алексей Балабанов',
                'duration_min' => 100,
                'genres' => ['драма', 'криминал'],
                'rating_avg' => 8.3,
                'rating_count' => 176,
                'description' => 'Демобилизованный Данила приезжает в Петербург к старшему брату и оказывается втянут в криминальные разборки девяностых.',
            ],
            [
                'slug' => 'the-intouchables',
                'title' => '1+1',
                'original_title' => 'Intouchables',
                'year' => 2011,
                'country' => 'Франция',
                'director' => 'Оливье Накаш, Эрик Толедано',
                'duration_min' => 112,
                'genres' => ['драма', 'комедия'],
                'rating_avg' => 8.8,
                'rating_count' => 220,
                'description' => 'Парализованный аристократ нанимает в помощники парня из пригорода, и между совершенно разными людьми возникает настоящая дружба.',
            ],
        ];
    }

    /**
     * Block "Новинки" on the home page (FR-01).
     *
     * @return array<int, array<string, mixed>>
     */
    public static function latest(int $limit = 6): array
    {
        $movies = self::all();
        usort($movies, fn (array $a, array $b) => $b['year'] <=> $a['year']);

        return array_slice($movies, 0, $limit);
    }

    /**
     * Block "Топ по рейтингу" on the home page (FR-01).
     *
     * @return array<int, array<string, mixed>>
     */
    public static function top(int $limit = 6): array
    {
        $movies = self::all();
        usort($movies, fn (array $a, array $b) => $b['rating_avg'] <=> $a['rating_avg']);

        return array_slice($movies, 0, $limit);
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function find(string $slug): ?array
    {
        foreach (self::all() as $movie) {
            if ($movie['slug'] === $slug) {
                return $movie;
            }
        }

        return null;
    }
}
