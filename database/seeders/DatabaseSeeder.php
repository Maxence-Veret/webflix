<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create();

        //pour lire le tableau et voir ne nom de var à choicir il faut taper : dd(response->json()) puis en tapant dans le terminal : php artisan migrate:fresh --seed


        //On va faire un appel sur l'api de the Movie db
        $response = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=ebc0a4ad59da5f80113ec7d1142c72a7&language=fr');
        $genres = $response->json()['genres'];

        foreach ($genres as $genre) {
            Category::factory()->create(['name' => $genre['name']]);
        }

        //Category::factory(15)->create();
        //Movie::factory(10)->create();

        $response = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=ebc0a4ad59da5f80113ec7d1142c72a7&language=fr');
        $movies = $response->json()['results'];

        foreach ($movies as $movie) {
            Movie::factory()->create([
            'title' => $movie['title'],
            'synopsys' => $movie['overview'],
            'cover' => 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'],
            'released_at' => $movie['release_date'],
            ]);
        }
    }
}
