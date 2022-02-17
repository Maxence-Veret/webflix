<?php

use App\Http\Controllers\PolitesseController;
use App\Http\Controllers\AboutController;
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

//affiche le formulaire
Route::get('/categories/creer', function () {
    return view('categories/create');
});

// je traite le formulaire
Route::post('/categories/creer', function () {
    //vérifier les erreurs
    request()->validate([
        'name' => 'required|min:3|max:10',
        // 'email' => 'required|email',
    ]);

    // dump(request('name'));

    //s'il n'y a pas 'erreurs, on cree la categorie
    Category::create([
    'name' => request('name'),
    ]);

    return redirect('/exercice/categories');

});




Route::get('/exercice/categories', function () {
    return view('exercice.categories', [
        'categories' => Category::all()
    ]);
});


Route::get('/exercice/categories/creer', function () {
    $category = Category::create([
        'name' => 'Test'
    ]);

    return redirect('/exercice/categories');
});

Route::get('/exercice/categories/{id}', function ($id) {
    dump($id);
    $category = Category::find($id);

    return $category->name;

    //return $id;
});

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