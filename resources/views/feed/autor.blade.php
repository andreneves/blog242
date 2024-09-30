@extends('layouts.app')

@section('content')

@foreach ($autores as $value)
    <p><strong><a href="{{ url('/feed/autor/' . $value->id) }}">{{ $value->name }}</a></strong></p>
@endforeach

@endsection
