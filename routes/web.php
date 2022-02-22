<?php

use App\Http\Controllers\PolitesseController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoyController;
use App\Http\Controllers\MovieController;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

Route::get('/', function () {
    return view('acceuil');
});

Route::get('/bonjour', [PolitesseController::class, 'helloEveryone']);

Route::get('/bonjour/{name}', [PolitesseController::class, 'helloSomeone']);

Route::get('/au-revoir', [PolitesseController::class, 'goodBye']);

Route::get('/a-propos', [AboutController::class, 'about']);

Route::get('/a-propos/{user}', [AboutController::class, 'aboutShow']);

Route::get('/categories', [CategoryController::class, 'index']);

//affiche le formulaire
Route::get('/categories/creer', [CategoryController::class, 'create']);

// je traite le formulaire
Route::post('/categories/creer', [CategoryController::class, 'store']);

Route::get('/categories/{category}', [CategoryController::class, 'Show']);
// modifier une categorie
Route::get('/categories/{category}/modifier', [CategoryController::class, 'edit']);
//pour remplacer la categorie modifié
Route::put('/categories/{category}', [CategoryController::class, 'update']);
//pour supprimer la categorie ciblé
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{movie}', [MovieController::class, 'show']);




// Route::get('/exercice/categories', function () {
//     return view('exercice.categories', [
//         'categories' => Category::all()
//     ]);
// });


// Route::get('/exercice/categories/creer', function () {
//     $category = Category::create([
//         'name' => 'Test'
//     ]);

//     return redirect('/exercice/categories');
// });

// Route::get('/exercice/categories/{id}', function ($id) {
//     dump($id);
//     $category = Category::find($id);

//     return $category->name;

//     //return $id;
// });

//////////////////////////////////////////

Route::get('/exercice/movies', function () {
    return view('exercice.movies', [
        'movies' => Movie::all()
    ]);
});

Route::get('/exercice/movies/creer', function () {
        Movie::create([
            'title' => 'WoW',
            'synopsys' => 'a',
            'duration' =>'1',
            'cover' => 'a.jpg',
        ]);

        return redirect('/exercice/movies');
});

Route::get('exercice/movies/{id}', function ($id) {
    return view('exercice.movie', [
    'movie' => Movie::find($id)
    ]);
});

// return ('exercice.movie')