<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // metodo factory recebe um Model como primeiro parametro (que na verdade esta representando uma tabela do 
        // banco de dados) e como segundo parametro uma quantidade de registros que deseja criar
        factory(Movie::class, 50)->create();
    }
}
