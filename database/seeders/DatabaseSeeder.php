<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Maintext;
use App\Models\Movie;
use App\Support\StaticMovies;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $names = ['fantastika' => 'фантастика', 'drama' => 'драма', 'komediya' => 'комедия', 'triller' => 'триллер', 'boevik' => 'боевик', 'fentezi' => 'фэнтези', 'anime' => 'аниме', 'kriminal' => 'криминал'];
        foreach ($names as $slug => $name) {
            Genre::firstOrCreate(['slug' => $slug], ['name' => $name]);
        }
        foreach (StaticMovies::all() as $data) {
            $genreNames = $data['genres'];
            unset($data['genres']);
            $data['poster'] = 'images/posters/'.$data['slug'].'.svg';
            $movie = Movie::updateOrCreate(['slug' => $data['slug']], $data);
            $movie->genres()->sync(Genre::whereIn('name', $genreNames)->pluck('id'));
        }
        $needed = max(0, 30 - Movie::count());
        Movie::factory()->count($needed)->create()->each(function (Movie $movie): void {
            $movie->genres()->sync(Genre::inRandomOrder()->limit(2)->pluck('id'));
        });
        foreach ([
            'about' => ['О проекте', '<p>КиноТека — учебная веб-библиотека фильмов.</p>'],
            'contacts' => ['Контакты', '<p>Свяжитесь с командой проекта через репозиторий GitHub.</p>'],
            'rules' => ['Правила', '<p>Оставляйте уважительные и содержательные отзывы.</p>'],
        ] as $url => [$title, $body]) {
            Maintext::updateOrCreate(['url' => $url], ['title' => $title, 'body' => $body]);
        }
    }
}
