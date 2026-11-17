<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MoviePagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_home_page_shows_latest_and_top_blocks(): void
    {
        $this->get('/')->assertOk()->assertSee('Новинки')->assertSee('Топ по рейтингу');
    }

    public function test_catalog_has_twelve_movies_per_page(): void
    {
        $this->get('/movies')->assertOk()->assertSee('Найдено фильмов: 30')->assertSee('page=2');
    }

    public function test_search_is_case_insensitive_and_partial(): void
    {
        $this->get('/movies?search=%D0%98%D0%9D%D0%A2%D0%95%D0%A0')->assertOk()->assertSee('Интерстеллар')->assertSee('Найдено фильмов: 1');
    }

    public function test_filters_and_sort_work_together(): void
    {
        $this->get('/movies?genre=fantastika&year=2014&sort=title')->assertOk()->assertSee('Интерстеллар')->assertSee('Найдено фильмов: 1');
    }

    public function test_movie_page_opens_by_slug(): void
    {
        $this->get('/movies/interstellar')->assertOk()->assertSee('Кристофер Нолан');
    }

    public function test_pages_and_unknown_urls(): void
    {
        $this->get('/page/about')->assertOk()->assertSee('О проекте');
        $this->get('/page/not-a-page')->assertNotFound();
        $this->get('/movies/no-such-movie')->assertNotFound();
    }
}
