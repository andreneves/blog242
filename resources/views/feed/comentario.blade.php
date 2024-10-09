@extends('layouts.app')

@section('content')

<p>{{ $postagem->titulo }}</p>

<form method='POST' action="{{ URL('/comentario') }}">

    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Comentário</label>
        <input type="hidden" name="postagem_id" value="{{ $postagem->id }}">
        <textarea id="w3review" class="form-control" name="conteudo" rows="4" cols="50">
        </textarea>
    </div>

    <input type="submit" value="ENVIAR">

</form>

@foreach ($postagem->comentarios as $value)
    <p> ->> {{ $value->conteudo }}</p>
    <p> ->>> {{ $value->autor->name }}</p>

    {{-- <p><strong><a href="{{ url('/feed/categoria/' . $value->id) }}">{{ $value->nome }}</a></strong></p> --}}
@endforeach

@endsection
