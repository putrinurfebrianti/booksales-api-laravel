<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Book::create([
            'title' => 'Lima Sekawan di Pulau Hantu',
            'description' => 'Petualangan klasik tentang Julian, Dick, Anne, George, dan anjing mereka, Timmy, saat mereka menyelidiki sebuah pulau terpencil yang dikabarkan berhantu.',
            'price' => 75000.00, 
            'stock' => 120, 
            'cover_photo' => 'https://ebooks.gramedia.com/ebook-covers/46792/image_highres/ID_LSPS1681093028391.jpg', 
        ]);

        Book::create([
            'title' => 'Bumi',
            'description' => 'Buku pertama dari seri Dunia Paralel karya Tere Liye. Mengisahkan petualangan Raib, Seli, dan Ali yang mengungkap rahasia keberadaan klan-klan lain di Bumi.',
            'price' => 99500.00,
            'stock' => 250,
            'cover_photo' => 'https://bukukita.com/babacms/displaybuku/95219_f.jpg',
        ]);

        Book::create([
            'title' => 'The Lord of the Rings: Fellowship of the Ring',
            'description' => 'Bagian pertama dari epik fantasi J.R.R. Tolkien. Frodo Baggins memulai perjalanan berbahaya untuk menghancurkan Cincin Sauron.',
            'price' => 150000.00,
            'stock' => 75,
            'cover_photo' => 'https://ebooks.gramedia.com/ebook-covers/40151/big_covers/ID_GPU2017MTH09TLOTRSPCFOTRUCB_B.jpg',
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'description' => 'Panduan praktis untuk membangun kebiasaan baik dan menghilangkan kebiasaan buruk, membahas kekuatan perubahan kecil yang bertambah seiring waktu.',
            'price' => 88000.50,
            'stock' => 300,
            'cover_photo' => 'https://ebooks.gramedia.com/ebook-covers/49184/image_highres/ID_AHPK2019MTH09AHP.jpg',
        ]);

        Book::create([
            'title' => 'Cantik Itu Luka',
            'description' => 'Novel fiksi sejarah oleh Eka Kurniawan yang memadukan mitologi, kisah cinta, dan kekerasan dalam sejarah Indonesia.',
            'price' => 110000.00,
            'stock' => 90,
            'cover_photo' => 'https://ebooks.gramedia.com/ebook-covers/42424/image_highres/ID_CL2018MTH05CL.jpg',
        ]);  
    }
}
