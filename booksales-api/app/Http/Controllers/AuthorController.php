<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $model = new Author();
        $authors = $model->getAuthors();


        return view('author', ['authors' => $authors]);
    }
}
