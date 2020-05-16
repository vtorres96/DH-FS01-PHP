<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{

    public function list(){
        // obtendo todos os filmes da tabela movies
        // $movies = Movie::all();

        // obtendo filmes com paginacao e ordenando por titulo de forma alfabetica (forma ASC)
        // lembrando que o orderBy recebe dois parametros, o primeiro a coluna que queremos ordernar,
        // o segundo a forma que queremos ordenar (ASC ou DESC)
        // lembrando que o paginate recebe um parametro que e a quantidade de registros que voce quer exibir po pagina
        $movies = Movie::orderBy('title', 'ASC')->paginate(10);

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

    public function edit($id){
        // encontrando o filme com base no id passado na rota da requisicao utilizando metodo find
        $movie = Movie::find($id);

        // retornando a view que contem o formulario para alterar um filme
        return view('movies.edit')->with('movie', $movie);
    }

    public function update(Request $request, $id){
        // encontrando o filme com base no id passado na rota da requisicao utilizando metodo find
        $movie = Movie::find($id);

        // validando campos
        $request->validate([
            "title" => "required|min:3",
            "synopsis" => "required|min:10",
            "cover_image" => "required"
        ]);

        $movie->update([
            "title" => $request->input('title'),
            "synopsis" => $request->input('synopsis'),
            "cover_image" => $request->input('cover_image')
        ]);

        // redirecionando para a rota de lista de usuarios
        return redirect("/filmes/listar");
    }

    public function delete($id){
        // encontrando o filme com base no id passado na rota da requisicao utilizando metodo find
        $movie = Movie::find($id);

        // excluindo o filme
        $movie->delete();

        // redirecionando para a rota de lista de usuarios
        return redirect('/filmes/listar');
    }
}
