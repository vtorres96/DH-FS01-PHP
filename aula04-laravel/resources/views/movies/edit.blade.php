@extends('layouts.app')

@section('title', 'Blockbuster - Filmes')

@section('content')
    <h1>Modificando Filmes</h1>

    <form method="POST" action="/filmes/modificar/{{$movie->id}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}

        <div class="form-group col-md-6 col-sm-12">
            <label for="title">Título</label>
            <input type="text" name="title" value="{{ $movie->title }}" class="form-control {{$errors->has('title') ? ' is-invalid':''}}" id="title">
            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="synopsis">Sinopse</label>
            <input type="text" name="synopsis" value="{{ $movie->synopsis }}" class="form-control {{$errors->has('synopsis') ? ' is-invalid':''}}" id="synopsis">
            <div class="invalid-feedback">{{ $errors->first('synopsis') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <img class="w-100" src="{{ $movie->cover_image == null ? asset('img/sem-imagem.jpg') : asset($movie->cover_image) }}" alt="">
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label for="cover_image">Imagem</label>
            <input type="file" name="cover_image" value="{{ $movie->cover_image }}" class="form-control {{$errors->has('cover_image') ? ' is-invalid':''}}" id="cover_image">
            <div class="invalid-feedback">{{ $errors->first('cover_image') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
    @if(isset($success) && $success != "")
        <div class="alert alert-success text-center col-md-6">
            {{ $success }}
        </div>
    @endif
@endsection