<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage()
    {
        $ourName = 'Farahana';
        $animals = ['MeowsAlot', 'BarksAlot', 'Purssloud'];
        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'MeowAlot']);
    }
    public function aboutPage()
    {
        return '<h1>About Page!</h1><a href="/">Back to Home</a>';
    }
}
