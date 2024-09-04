@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <a href="{{ url('/postagem/create') }}" class="btn btn-success" role="button" aria-pressed="true">CRIAR</a>

                @if (session('mensagem'))
                    <br>
                    <div class="alert alert-success">
                        {{ session('mensagem') }}
                    </div>
                @endif

                <script>
                    function ConfirmDelete() {
                        return confirm('Tem certeza que deseja excluir este registro?');
                    }
                </script>

                <table>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Título</th>
                        <th>Ações</th>
                    </tr>

                    @foreach($postagens as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->categoria->nome }}</td>
                            <td>{{ $value->titulo }}</td>
                            <td>
                            <a href="{{ url('/postagem/' . $value->id) }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Visualizar</a>

                            <a href="{{ url('/postagem/' . $value->id . '/edit') }}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Editar</a>

                            <form method='POST' action='{{ url('/postagem/' . $value->id) }}' onsubmit="return ConfirmDelete()">
                                @method('DELETE')
                                @csrf
                                <input type='submit' class="btn btn-danger btn-lg active" value='Excluir'>
                            </form>

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


