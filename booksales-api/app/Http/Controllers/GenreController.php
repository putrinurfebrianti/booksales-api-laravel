<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
     public function index()
    {
        $model = new Genre();
        $genres = $model->getGenres();

        return view('genre', ['genres' => $genres]);
    }
}
