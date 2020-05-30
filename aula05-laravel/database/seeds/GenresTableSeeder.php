<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            "description" => "Drama"
        ]);

        Genre::create([
            "description" => "Ação"
        ]);

        Genre::create([
            "description" => "Ficção"
        ]);

        Genre::create([
            "description" => "Terror"
        ]);

        Genre::create([
            "description" => "Suspense"
        ]);

        Genre::create([
            "description" => "Romance"
        ]);
    }
}
