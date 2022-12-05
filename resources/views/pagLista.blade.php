@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">Página de lista</h1>

@endsection

@section('seccion')
    <h3>Lista</h3>
    @foreach($xAlumnos as $item)
        <p> {{ $item->id }} {{ $item->nomEst }} </p>
        <p> {{ $item->id }} {{ $item->apeEst}} </p>
        <p> {{ $item->id }} {{ $item->fnaEst}} </p>
        <p> {{ $item->id }} {{ $item->turmat}} </p>
        <p> {{ $item->id }} {{ $item->semMat}} </p>
        <p> {{ $item->id }} {{ $item->estMat}} </p>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Last</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Semestre</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
        </table>

        
    @endforeach

@endsection