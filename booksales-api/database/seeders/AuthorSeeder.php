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
            'name' => 'Andrea Hirata',
            'bio' => 'Penulis Indonesia yang terkenal lewat novel "Laskar Pelangi", sering mengangkat tema pendidikan dan budaya Melayu.',
        ]);

        Author::create([
            'name' => 'Tere Liye',
            'bio' => 'Penulis fiksi populer yang karyanya mencakup berbagai genre mulai dari romansa, fantasi, hingga buku anak-anak.',
        ]);

        Author::create([
            'name' => 'Pramoedya Ananta Toer',
            'bio' => 'Salah satu penulis terkemuka di Indonesia. Karyanya yang paling terkenal adalah Tetralogi Buru.',
        ]);

        Author::create([
            'name' => 'Fiersa Besari',
            'bio' => 'Musisi, penulis, dan petualang asal Bandung. Kerap menulis tentang perjalanan, alam, dan romansa dalam gaya santai.',
        ]);

        Author::create([
            'name' => 'Dewi Lestari',
            'bio' => 'Dikenal sebagai Dee Lestari. Karyanya yang populer meliputi Supernova dan Filosofi Kopi, sering memadukan sains dan spiritualitas.',
        ]);
    }
}
