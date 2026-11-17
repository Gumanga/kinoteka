<a href="{{ route('movies.show', $movie->slug) }}" class="card">
    <div class="card__poster">
        <img src="{{ asset($movie->poster ?: 'images/logo.svg') }}" alt="Постер: {{ $movie->title }}">
        <span class="card__rating">★ {{ number_format((float) $movie->rating_avg, 1) }}</span>
    </div>
    <h3 class="card__title">{{ $movie->title }}</h3>
    <p class="card__meta">{{ $movie->year }} · {{ $movie->genres->pluck('name')->implode(', ') }}</p>
</a>
