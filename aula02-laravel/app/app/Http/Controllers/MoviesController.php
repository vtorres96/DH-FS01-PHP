<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{

    public function list(){
        // obtendo todos os filmes da tabela movies
        $movies = Movie::all();

        // retornando a view que lista filmes com a variavel $movies que contem todos os registros da coluna movies
        return view('movies.list')->with('movies', $movies);
    }

    public function create(){
        // retornando a view que contem o formulario para adicionar um filme
        return view('movies.create');
    }

    public function save(Request $request){

        // validando campos
        $request->validate([
            "title" => "required|min:3",
            "synopsis" => "required|min:10",
            "cover_image" => "required"
        ]);

        // criando objeto para enviar ao banco de dados
        $movie = Movie::create([
            "title" => $request->input('title'),
            "synopsis" => $request->input('synopsis'),
            "cover_image" => $request->input('cover_image')
        ]);

        // salvando registro no banco de dados
        $movie->save();

        // redirecionando para a rota de adicionar filme
        return redirect('/filmes/adicionar');
    }
}
