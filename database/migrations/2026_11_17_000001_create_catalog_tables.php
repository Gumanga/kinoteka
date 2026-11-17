<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('maintexts', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->string('title');
            $table->longText('body');
            $table->timestamps();
        });
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->timestamps();
        });
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title')->index();
            $table->string('title_search')->index();
            $table->string('original_title')->nullable();
            $table->unsignedSmallInteger('year')->index();
            $table->string('country');
            $table->string('director');
            $table->unsignedSmallInteger('duration_min');
            $table->text('description');
            $table->string('poster')->nullable();
            $table->decimal('rating_avg', 3, 1)->default(0);
            $table->unsignedInteger('rating_count')->default(0);
            $table->timestamps();
        });
        Schema::create('genre_movie', function (Blueprint $table) {
            $table->foreignId('genre_id')->constrained()->cascadeOnDelete();
            $table->foreignId('movie_id')->constrained()->cascadeOnDelete();
            $table->primary(['genre_id', 'movie_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genre_movie');
        Schema::dropIfExists('movies');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('maintexts');
    }
};
