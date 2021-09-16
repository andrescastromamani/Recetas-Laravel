@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('recipes.create')}}" class="btn btn-dark">Crear</a>
        <h2 class="text-center mt-3">Administra tus Recetas</h2>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table table-light table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recipes as $recipe)
                        <tr>
                            <td>{{$recipe->title}}</td>
                            <td>{{$recipe->category->name}}</td>
                            <td>
                                <a href="" class="btn btn-danger">Eliminar</a>
                                <a href="" class="btn btn-warning">Editar</a>
                                <a href="" class="btn btn-success">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
