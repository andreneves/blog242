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

                <form method='POST' action="{{ URL('/categoria') }}">

                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite o nome da categoria">
                    </div>
            
                    <input type="submit" value="ENVIAR">
            
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


