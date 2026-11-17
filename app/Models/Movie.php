<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'original_title', 'year', 'country', 'director', 'duration_min', 'description', 'poster', 'rating_avg', 'rating_count'];

    public function setTitleAttribute(string $value): void
    {
        $this->attributes['title'] = $value;
        $this->attributes['title_search'] = mb_strtolower($value);
    }

    protected function casts(): array
    {
        return ['year' => 'integer', 'duration_min' => 'integer', 'rating_avg' => 'decimal:1', 'rating_count' => 'integer'];
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function scopeSearch(Builder $query, ?string $term): Builder
    {
        return $query->when($term, fn (Builder $q) => $q->where('title_search', 'like', '%'.mb_strtolower($term).'%'));
    }
}
