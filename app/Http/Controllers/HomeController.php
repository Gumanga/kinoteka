<?php

namespace App\Http\Controllers;

use App\Support\StaticMovies;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Home page: "Новинки" and "Топ по рейтингу", 6 movies each (FR-01).
     */
    public function index(): View
    {
        return view('home', [
            'latestMovies' => StaticMovies::latest(6),
            'topMovies' => StaticMovies::top(6),
        ]);
    }
}
