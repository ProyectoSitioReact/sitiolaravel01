@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">Página de lista</h1>

@endsection

@section('seccion')
    <h3>Lista</h3>
    @foreach($xAlumnos as $item)
        <p> {{ $item->id }} {{ $item->nomEst }} </p>
    @endforeach

@endsection