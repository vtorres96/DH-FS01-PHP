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
        ]);

        $arquivo = $request->file('cover_image');

        if(empty($arquivo)){
            $caminhoRelativo = null;
        } else {
            // criar pasta uploads
            $arquivo->storePublicly('uploads');

            // criar caminho ate a pasta onde desejamos armazenar os uploads
            $caminhoAbsoluto = public_path()."/storage/uploads";

            // obtendo nome original do arquivo
            $nomeArquivo = $arquivo->getClientOriginalName();

            // caminho passado para o banco de dados encontrar o arquivo relativo ao registro
            $caminhoRelativo = "storage/uploads/$nomeArquivo";

            // mover o arquivo para a pasta uploads e finalizar o upload
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        // criando objeto para enviar ao banco de dados
        $movie = Movie::create([
            "title" => $request->input('title'),
            "synopsis" => $request->input('synopsis'),
            "cover_image" => $caminhoRelativo
        ]);

        // salvando registro no banco de dados
        $movie->save();

        // redirecionando para a rota de adicionar filme
        return view('movies.create')->with('success', 'Filme inserido com sucesso');
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
        ]);

        $arquivo = $request->file('cover_image');

        if(empty($arquivo)){
            $caminhoRelativo = null;
        } else {
            // criar pasta uploads
            $arquivo->storePublicly('uploads');

            // criar caminho ate a pasta onde desejamos armazenar os uploads
            $caminhoAbsoluto = public_path()."/storage/uploads";

            // obtendo nome original do arquivo
            $nomeArquivo = $arquivo->getClientOriginalName();

            // caminho passado para o banco de dados encontrar o arquivo relativo ao registro
            $caminhoRelativo = "storage/uploads/$nomeArquivo";

            // mover o arquivo para a pasta uploads e finalizar o upload
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        $movie->update([
            "title" => $request->input('title'),
            "synopsis" => $request->input('synopsis'),
            "cover_image" => $caminhoRelativo
        ]);

        // redirecionando para a rota de lista de usuarios
        return view("movies.edit")->with(['movie' => $movie, 'success' =>'Filme alterado com sucesso']);
    }

    public function delete($id){
        // encontrando o filme com base no id passado na rota da requisicao utilizando metodo find
        $movie = Movie::find($id);

        // excluindo o filme
        $movie->delete();

        // redirecionando para a rota de lista de usuarios
        return redirect('/filmes/listar');
    }

    public function search(Request $request) {
        // obtendo o que o usuario digitou no filtro de busca
        $search = $request->input('search');

        // filtrando por titulo ou sinopse
        $movies = Movie::where('title', 'like', '%'.$search.'%')
            ->orWhere('synopsis', 'like', '%'.$search.'%')
            ->paginate(10);

        return view('movies.list')->with(['movies' => $movies, 'search' => $search]);
    }
}
