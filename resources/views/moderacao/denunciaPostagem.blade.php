@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                @if (session('mensagem'))
                    <br>
                    <div class="alert alert-success">
                        {{ session('mensagem') }}
                    </div>
                @endif

                <table>
                    <tr>
                        <th>ID</th>
                        <th>Postagem - Título</th>
                        <th>Postagem - Autor</th>
                        <th>Denunciante</th>
                        <th>Conteúdo Denúncia</th>
                        <th>status</th>
                        <th>Ações</th>
                    </tr>

                    @foreach($denunciaPostagem as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->postagem->titulo }}</td>
                            <td>{{ $value->postagem->autor->name }}</td>
                            <td>{{ $value->denunciante->name }}</td>
                            <td>{{ $value->conteudo }}</td>
                            <td>{{ $value->status }}</td>
                            <td>
                            <a href="{{ url('/ModeracaoDenunciaPostagemAceito/' . $value->id) }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ACEITO</a>
                            <a href="{{ url('/ModeracaoDenunciaPostagemNegado/' . $value->id) }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">NEGADO</a>


                            </td>
                        </tr>
                    @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


