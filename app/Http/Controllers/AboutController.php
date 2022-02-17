<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('a-propos', [
            'name' => 'A propos',
            'equipe' => ['Max', 'Mix', 'Mox'],
        ]);
    }

    public function aboutShow($user)
    {
        return view('a-propos-show', [
            'user' => $user,
        ]);
    }
}
