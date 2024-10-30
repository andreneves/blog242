@extends('layouts.app')

@section('content')

<p>{{ $postagem->titulo }}</p>

@auth
    <form method='POST' action="{{ URL('/feed/denunciarPostagem') }}">

        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Conteúdo</label>
            <input type="hidden" name="postagem_id" value="{{ $postagem->id }}">
            <textarea id="w3review" class="form-control" name="conteudo" rows="4" cols="50">
            </textarea>
        </div>

        <input type="submit" value="ENVIAR">

    </form>
@endauth

@endsection
