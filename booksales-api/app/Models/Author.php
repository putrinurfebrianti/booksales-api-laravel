<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        ['id' => 1, 'nama' => 'Tere Liye'],
        ['id' => 2, 'nama' => 'Andrea Hirata'],
        ['id' => 3, 'nama' => 'Dee Lestari'],
        ['id' => 4, 'nama' => 'J.K. Rowling'],
        ['id' => 5, 'nama' => 'Agatha Christie'],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
