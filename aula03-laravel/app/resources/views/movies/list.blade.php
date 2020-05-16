@extends('layouts.app')

@section('title', 'Blockbuster - Filmes')

@section('content')
    {{-- Verificando se a variavel veio vazia, ou seja, sem registros da tabela movies --}}
    @if($movies->isEmpty())
        <div class="col-12">
            <h1 class="col-12 text-center">Que pena! Não temos filmes cadastrados na plataforma</h1>
        </div>
    @else
        <section class="row">
            <header class="col-12">
                <h1 class="col-12 text-center">Filmes</h1>
                <p class="col-12 d-block text-center"><b>listando todos os filmes da nossa plataforma</b></p>
            </header>
        </section>
        <section class="row">
            <article class="col-12">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Capa</th>
                            <th scope="col">Título</th>
                            <th scope="col">Sinopse</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                        <tr>
                            <td scope="row">
                                <img width="80" height="80" src="{{ $movie->cover_image }}" alt="">
                            </td>
                            <td scope="row">{{$movie->title}}</td>
                            <td scope="row">{{$movie->synopsis}}</td>
                            <td>
                                <a href="/filmes/modificar/{{$movie->id}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal{{ $movie->id }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <div class="modal fade" id="modal{{ $movie->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Deseja excluir o filme {{ $movie->title }} ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Filme: {{ $movie->title }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <form action="/filmes/remover/{{ $movie->id }}" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger">Excluir</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{-- paginando registros --}}
                    {{ $movies->links() }}
                    {{-- {{ $movies->appends(['search' => isset($search) ? $search : ''])->links() }} --}}
                </div>
            </article>
        </section>
    @endif
@endsection