@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method='POST' action="{{ URL('/postagem') }}">

                    @csrf

                    <div class="form-group">

                        <label for="cars">Escolha uma categoria:</label><br>

                        <select name="categoria_id"  class="form-control"id="cars">
                            @foreach ($categorias as $value)
                                <option value="{{ $value->id }}">{{ $value->nome }}</option>
                            @endforeach
                        </select>

                        <label for="exampleInputEmail1">Título</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Digite o nome da postagem">

                        <label for="exampleInputEmail1">Conteúdo</label>

                        <textarea id="conteudo" class="form-control" name="conteudo" rows="4" cols="50"></textarea>
                    </div>


                    <input type="submit" value="ENVIAR">

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


