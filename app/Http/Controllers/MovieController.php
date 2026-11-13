<?php

namespace App\Http\Controllers;

use App\Support\StaticMovies;
use Illuminate\View\View;

class MovieController extends Controller
{
    /**
     * Catalog /movies (FR-02). Static data in Sprint 1, database and pagination in Sprint 2.
     */
    public function index(): View
    {
        return view('movies.index', [
            'movies' => StaticMovies::all(),
        ]);
    }

    /**
     * Movie page /movies/{slug} (FR-05). Unknown slug returns 404.
     */
    public function show(string $slug): View
    {
        $movie = StaticMovies::find($slug);

        abort_if($movie === null, 404);

        return view('movies.show', [
            'movie' => $movie,
        ]);
    }
}
