<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Drama',
            'desk' => 'Genre drama menampilkan kisah-kisah yang menyoroti emosi, konflik pribadi, dan hubungan antarkarakter. Film drama seringkali mengeksplorasi tema-tema seperti cinta, kesedihan, kehilangan, dan perjuangan hidup.',
        ]);

        Genre::create([
            'nama' => 'Sci-fi',
            'desk' => 'Genre ini menggabungkan unsur fiksi ilmiah dengan elemen spekulatif, teknologi canggih, atau peristiwa di masa depan yang belum terjadi.',
        ]);

        Genre::create([
            'nama' => 'Action',
            'desk' => 'Film dengan genre action menampilkan adegan-adegan yang penuh aksi, kecepatan, dan ketegangan. Biasanya, film ini menampilkan pertarungan fisik, kejar-kejaran, atau aksi laga yang intens',
        ]);

        Genre::create([
            'nama' => 'Horror',
            'desk' => 'Film dengan genre horror ditujukan untuk menimbulkan rasa takut, ketegangan, dan ketakutan pada penonton. Biasanya, film horor melibatkan unsur-unsur supranatural, makhluk mengerikan, atau situasi yang menakutkan. Adegan-adegan jump scare, atmosfer yang mencekam, dan pembangunan ketegangan secara perlahan seringkali menjadi ciri khas film horor.',
        ]);

        Genre::create([
            'nama' => 'Romance',
            'desk' => 'Film dengan genre romance menfokuskan pada kisah cinta dan hubungan antara karakter utama. Biasanya, film romantis menggambarkan perjalanan emosional dari pertemuan, jatuh cinta, konflik, dan kebahagiaan dalam cinta. ',
        ]);
    }
}
