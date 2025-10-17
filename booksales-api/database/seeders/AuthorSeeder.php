<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Enid Blyton',
            'bio' => 'Penulis asal Inggris yang terkenal dengan buku-buku anak dan remaja, terutama seri "Lima Sekawan" (The Famous Five) dan "Malory Towers".',
        ]);

        Author::create([
            'name' => 'Tere Liye',
            'bio' => 'Penulis fiksi populer asal Indonesia yang karyanya mencakup berbagai genre mulai dari romansa, fantasi, hingga buku anak-anak. Terkenal dengan serial "Dunia Paralel".',
        ]);

        Author::create([
            'name' => 'J.R.R. Tolkien',
            'bio' => 'Penulis, penyair, filolog, dan akademisi Inggris. Ia paling dikenal sebagai penulis epik fantasi tinggi "The Hobbit" dan "The Lord of the Rings".',
        ]);

        Author::create([
            'name' => 'James Clear',
            'bio' => 'Penulis, pembicara, dan wirausahawan yang berfokus pada kebiasaan, pengambilan keputusan, dan peningkatan berkelanjutan. Penulis buku terlaris "Atomic Habits".',
        ]);

        Author::create([
            'name' => 'Eka Kurniawan',
            'bio' => 'Penulis Indonesia yang karyanya diakui secara internasional. Novelnya, "Cantik Itu Luka", mendapat pujian karena memadukan fiksi sejarah, mitologi, dan fantasi.',
        ]);
            }
        }
