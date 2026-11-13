<?php

namespace Tests\Feature;

use Tests\TestCase;

class MoviePagesTest extends TestCase
{
    public function test_home_page_shows_latest_and_top_blocks(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Новинки');
        $response->assertSee('Топ по рейтингу');
    }

    public function test_catalog_page_lists_movies(): void
    {
        $response = $this->get('/movies');

        $response->assertOk();
        $response->assertSee('Каталог фильмов');
        $response->assertSee('Интерстеллар');
    }

    public function test_movie_page_opens_by_slug(): void
    {
        $response = $this->get('/movies/interstellar');

        $response->assertOk();
        $response->assertSee('Кристофер Нолан');
    }

    public function test_unknown_movie_returns_404(): void
    {
        $this->get('/movies/no-such-movie')->assertNotFound();
    }
}
