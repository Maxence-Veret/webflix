<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolitesseController extends Controller
{
    public function helloEveryone()
    {
        return view('hello', [
            'name' => 'Fiorella',
            'number' => [1, 3, 7],
            ]);
    }

    public function goodBye()
    {
        return view('good-bye');
    }

    public function helloSomeone($name)
    {
        return view('hello', [
            'name' => $name,
            'number' => [],
        ]);
    }

    // public function about()
    // {
    //     return view('a-propos', [
    //         'name' => 'A propos',
    //         'equipe' => ['Max', 'Mix', 'Mox'],
    //     ]);
    // }

    // public function aboutShow($user)
    // {
    //     return view('a-propos-show', [
    //         'user' => $user,
    //     ]);
    // }
}
