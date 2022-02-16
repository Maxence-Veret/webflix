<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('acceuil');
});

Route::get('/bonjour', function () {
    return view('hello', [
    'name' => 'Fiorella',
    'number' => [1, 3, 7],
    ]);
});

Route::get('/bonjour/{name}', function ($name) {
    return view('hello', [
        'name' => $name,
        'number' => [],
    ]);
});

Route::get('/au-revoir', function () {
    return view('good-bye');
});

Route::get('/a-propos', function () {
    return view('a-propos', [
        'name' => 'A propos',
        'equipe' => ['Max', 'Mix', 'Mox'],
    ]);
});

Route::get('/a-propos/{user}', function ($user) {
    return view('a-propos-show', [
        'user' => $user,
    ]);
});
