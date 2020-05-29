<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // criando um registro que e default e nos facilita a saber qual email e senha de
        // um usuario caso tivermos que testar alguma coisa relacionada a login, validacao de login, etc...
        User::create([
            "name" => "Abirosvaldo",
            "email" => "abirosvaldo@gmail.com",
            "password" => bcrypt("123456")
        ]);

        // metodo factory recebe um Model como primeiro parametro (que na verdade esta representando uma tabela do 
        // banco de dados como) e uma quantidade de registros que deseja criar como segundo parametro
        factory(User::class, 9)->create();
    }
}
