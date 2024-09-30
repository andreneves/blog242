@extends('layouts.app')

@section('content')

@foreach ($categorias as $value)
    <p><strong><a href="{{ url('/feed/categoria/' . $value->id) }}">{{ $value->nome }}</a></strong></p>
@endforeach

@endsection
