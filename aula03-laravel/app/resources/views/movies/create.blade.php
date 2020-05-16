@extends('layouts.app')

@section('content')
    <h1>Cadastro de Filmes</h1>

    <form method="POST" action="/filmes/adicionar" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}
        <div class="form-group col-md-6 col-sm-12">
            <label for="title">Título</label>
            <input type="text" name="title"  value="{{ old('title') }}" class="form-control{{$errors->has('title') ? ' is-invalid':''}}" id="title">
            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="synopsis">Sinopse</label>
            <input type="text" name="synopsis"  value="{{ old('synopsis') }}" class="form-control{{$errors->has('synopsis') ? ' is-invalid':''}}" id="synopsis">
            <div class="invalid-feedback">{{ $errors->first('synopsis') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="cover_image">Imagem</label>
            <input type="text" name="cover_image" value="{{ old('cover_image') }}" class="form-control{{$errors->has('cover_image') ? ' is-invalid':''}}" id="cover_image">
            <div class="invalid-feedback">{{ $errors->first('synopsis') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection