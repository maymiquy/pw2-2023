<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'The Shining',
            'user' => 'FilmFan88',
            'rating' => 9.0,
            'review' => 'The Shining is a true horror classic that still sends chills down my spine. Jack performance is outstanding, and the atmospheric setting of the Overlook Hotel is incredibly eerie',
            'tanggal' => '119-12-2021',
        ]);

        Review::create([
            'film' => 'Evil Dead',
            'user' => 'HorrorFanatic99',
            'rating' => 8.5,
            'review' => 'Evil Dead is a gory and thrilling horror film. The practical effects and intense violence create a truly terrifying experience. ',
            'tanggal' => '19-12-2021',
        ]);

        Review::create([
            'film' => 'I Want to Eat Your Pancreas',
            'user' => 'AnimeLover22',
            'rating' => 9.5,
            'review' => 'I Want to Eat Your Pancreas is a beautiful and emotional anime film. The story explores themes of friendship, love, and the fragility of life',
            'tanggal' => '19-12-2021',
        ]);

        Review::create([
            'film' => 'Sherlock Holmes',
            'user' => 'DetectiveFan77',
            'rating' => 8.0,
            'review' => 'Sherlock Holmes is a stylish and entertaining detective film. Robert Downey Jr. brings a charismatic energy to the role of Holmes, and the dynamic between him and Jude Law as Watson is fantastic',
            'tanggal' => '19-12-2021',
        ]);

        Review::create([
            'film' => 'Tenet',
            'user' => 'SciFiGeek1017',
            'rating' => 8.2,
            'review' => 'Tenet is a mind-bending and visually stunning sci-fi film. Christopher Nolan direction is masterful, and the concept of time inversion is fascinating.',
            'tanggal' => '19-12-2021',
        ]);
    }
}
