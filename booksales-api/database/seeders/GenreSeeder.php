<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Fiksi Anak/Petualangan',
            'description' => 'Genre yang ditujukan untuk pembaca anak-anak dan remaja, sering berpusat pada eksplorasi, misteri, dan perjalanan.',
        ]);

        Genre::create([
            'name' => 'Fantasi',
            'description' => 'Genre fiksi yang mengeksplorasi imajinasi dan dunia yang tidak nyata, sering melibatkan sihir, makhluk mitos, dan petualangan epik.',
        ]);

        Genre::create([
            'name' => 'Fantasi Tinggi (High Fantasy)',
            'description' => 'Sub-genre fantasi yang berlatar di dunia fiksi yang sepenuhnya terpisah dari dunia nyata (secondary world), sering dengan alur cerita besar mengenai pertarungan antara kebaikan dan kejahatan.',
        ]);

        Genre::create([
            'name' => 'Pengembangan Diri (Self-Help)',
            'description' => 'Genre non-fiksi yang bertujuan untuk mengedukasi pembaca tentang cara-cara meningkatkan kualitas hidup, kebiasaan, atau keterampilan pribadi.',
        ]);

        Genre::create([
            'name' => 'Fiksi Sastra',
            'description' => 'Genre yang menekankan pada nilai artistik, karakterisasi yang mendalam, dan eksplorasi isu-isu sosial, budaya, atau filosofis dengan gaya penulisan yang kompleks.',
        ]);
    }
}
