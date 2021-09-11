@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('recipes.create')}}" class="btn btn-dark">Crear</a>
        <h2 class="text-center mt-3">Administra tus Recetas</h2>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table table-dark table-hover">
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
        </div>
    </div>
@endsection
