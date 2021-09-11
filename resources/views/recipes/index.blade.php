@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">Administra tus Recetas</h2>
        <table class="table table-dark table-hover mt-5">
            <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
