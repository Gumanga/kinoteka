<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function index(Request $request): View
    {
        $filters = $request->validate([
            'search' => ['nullable', 'string', 'max:100'],
            'genre' => ['nullable', 'string', 'max:100'],
            'year' => ['nullable', 'integer', 'between:1888,2100'],
            'sort' => ['nullable', 'in:rating,year,title'],
        ]);
        $query = Movie::query()->with('genres')->search($filters['search'] ?? null);
        if (!empty($filters['genre'])) {
            $query->whereHas('genres', fn ($q) => $q->where('slug', $filters['genre']));
        }
        if (!empty($filters['year'])) {
            $query->where('year', $filters['year']);
        }
        match ($filters['sort'] ?? 'rating') {
            'year' => $query->orderByDesc('year')->orderBy('id'),
            'title' => $query->orderBy('title')->orderBy('id'),
            default => $query->orderByDesc('rating_avg')->orderBy('id'),
        };
        return view('movies.index', [
            'movies' => $query->paginate(12)->withQueryString(),
            'genres' => Genre::orderBy('name')->get(),
            'years' => Movie::select('year')->distinct()->orderByDesc('year')->pluck('year'),
        ]);
    }

    public function show(string $slug): View
    {
        return view('movies.show', ['movie' => Movie::with('genres')->where('slug', $slug)->firstOrFail()]);
    }
}
