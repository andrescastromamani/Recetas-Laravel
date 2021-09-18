@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('recipes.create')}}" class="btn btn-dark">Crear</a>
        <h2 class="text-center mt-3">Administra tus Recetas</h2>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table table-active table-hover">
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
                                <a href="" class="btn btn-danger mr-2 ml-2 float-right">Eliminar</a>
                                <a href="" class="btn btn-warning mr-2 ml-2 float-right">Editar</a>
                                <a href="{{route('recipes.show', $recipe)}}" class="btn btn-success mr-2 ml-2 float-right">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
