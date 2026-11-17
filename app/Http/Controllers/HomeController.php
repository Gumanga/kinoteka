<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'latestMovies' => Movie::with('genres')->orderByDesc('year')->orderBy('id')->limit(6)->get(),
            'topMovies' => Movie::with('genres')->orderByDesc('rating_avg')->orderByDesc('rating_count')->limit(6)->get(),
        ]);
    }
}
